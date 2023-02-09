<div class="table-responsive">
    <table class="table" id="semesters-table">
        <thead>
        <tr>
            <th>Semester Name</th>
        <th>Semester Code</th>
        <th>Semester Duration</th>
        <th>Semester Description</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($semesters as $semester)
            <tr>
                <td>{{ $semester->Semester_Name }}</td>
            <td>{{ $semester->Semester_Code }}</td>
            <td>{{ $semester->Semester_Duration }}</td>
            <td>{{ $semester->Semester_Description }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['semesters.destroy', $semester->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('semesters.show', [$semester->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye">View</i>
                        </a>
                        <a href="{{ route('semesters.edit', [$semester->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit">Edit</i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt">Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
