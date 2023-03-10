<div class="table-responsive">
    <table class="table" id="academics-table">
        <thead>
        <tr>
            <th>Academic Year</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($academics as $academics)
            <tr>
                <td>{{ $academics->academic_year }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['academics.destroy', $academics->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('academics.show', [$academics->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"> &nbsp;View</i>
                        </a>
                        <a href="{{ route('academics.edit', [$academics->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"> &nbsp;Edit</i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"> &nbsp;Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
