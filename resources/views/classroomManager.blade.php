@extends('template')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Classroom Manager</h1>
  <div>
    <div class="table-responsive">
      <table id="table" class="table table-striped">
        <thead>
          <tr>
            <th>Classroom ID</th>
            <th>Classroom Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($classroomInfo as $classroom)
          <tr>
            <td>{{$classroom['classroomId']}}</td>
            <td>{{$classroom['name']}}</td>
            <td>
              <button class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-classroomId="{{$classroom['classroomId']}}" data-name="{{$classroom['name']}}">Edit</button>
              <form action="/deleteClassroom" method="post" style="display: inline" onsubmit="return isConfirm()">
              {{ csrf_field() }}
                <button type="submit" id="btn-del-classroom" name="classroomId" class="btn btn-danger" value="{{$classroom['classroomId']}}">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modals -->
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form action="/editClassroom" method="post">
        {{ csrf_field() }}
          <div class="row">
            <div class="col-xs-12"> 
              <input type="hidden" name="classroomId" id="editClassroomId" />
              <h6>New Class Name: </h6>
              <input type="text" name="name" class="form-control" id="editName" />
              <br \>
            </div> 
            <div class="col-xs-12 text-center">
              <button type="submit" class="btn btn-success">Submit</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var classroomId = button.data('classroomid');
    var name = button.data('name');
    var modal = $(this);
    modal.find('.modal-title').text('New Classname for ' + name);
    modal.find('.modal-body #editClassroomId').val(classroomId);
    modal.find('.modal-body #editName').val(name);
  });
});

function isConfirm(){
  var button = document.getElementById('btn-del-classroom');
  var isConfirm = confirm("Are you sure to delete this record?");
  return isConfirm;
}

</script>

@endsection
