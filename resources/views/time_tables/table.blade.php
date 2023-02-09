<div class="table-responsive">
    <table class="table" id="timeTables-table">
        <thead>
        <tr>
            <th>Time</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($timeTables as $timeTable)
            <tr>
                <td>{{ $timeTable->time }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['timeTables.destroy', $timeTable->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('timeTables.show', [$timeTable->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('timeTables.edit', [$timeTable->id]) }}"
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
