<div class="table-responsive">
    <table class="table" id="faculities-table">
        <thead>
        <tr>
            <th>Faculty Name</th>
        <th>Faculty Code</th>
        <th>Faculty Description</th>
        <th>Faculty Status</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($faculities as $faculities)
            <tr>
                <td>{{ $faculities->faculty_name }}</td>
            <td>{{ $faculities->faculty_code }}</td>
            <td>{{ $faculities->faculty_description }}</td>
            <td>{{ $faculities->faculty_status }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faculities.destroy', $faculities->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faculities.show', [$faculities->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faculities.edit', [$faculities->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
