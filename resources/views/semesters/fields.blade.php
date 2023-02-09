<div class="modal fade" id="semester-add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Semester</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- Semester Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Semester_Name', 'Semester Name:') !!}
    {!! Form::text('Semester_Name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Semester Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Semester_Code', 'Semester Code:') !!}
    {!! Form::number('Semester_Code', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Semester_Duration', 'Semester Duration:') !!}
    {!! Form::text('Semester_Duration', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Semester Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Semester_Description', 'Semester Description:') !!}
    {!! Form::textarea('Semester_Description', null, ['class' => 'form-control']) !!}
</div>


</div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
  {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
  
 
 
 

</div>
    </div>
  </div>
</div>