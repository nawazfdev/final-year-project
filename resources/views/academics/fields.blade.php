<div class="modal fade" id="Academics-add-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

<!-- Academic Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('academic_year', 'Academic Year:') !!}
    {!! Form::text('academic_year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
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
 