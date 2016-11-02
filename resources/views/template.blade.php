<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Teacher's Portal</title>
    <!-- Bootstrap -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/dashboard.css') }}" type="text/css" rel="stylesheet" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/loadingoverlay.min.js') }}"></script>
    <script>
      $(document).ready(function() {
          $('#table').DataTable();
          $.ajax({
            method: "POST",
            url: 'http://spapi.t05.sg/portal/getClassrooms',
            data: {
              "teacherId": "teacher",
              "sessionToken": $('#classroomList').data('session')
            },
            success: function(data) {
              $.each(JSON.parse(data), function(index, value) {
                console.log(value.name);
                $("#newClassroom").before("<li><a href=\"/classroom\">" + value.name + "</a></li>");
              });
            }
          })

          $.ajax({
            method: "POST",
            url: 'http://spapi.t05.sg/portal/getTopics',
            data: {
              "teacherId": "teacher",
              "sessionToken": $('#topicList').data('session')
            },
            success: function(data) {
              $.each(JSON.parse(data), function(index, value) {
                console.log(value.name);
                $("#topicList").append("<li><a href=\"/chapter\">" + value.name + "</a></li>");
              });
            }
          })
      });
    </script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/dashboard">Teacher's Portal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" id="classroomList" data-session="{{Session::get('sessionToken')}}">
            <li>
                <h4 style="margin-left:10px">Classroom(s)</h4>
            </li>
            <li id="newClassroom"><a class="add-classroom" href="#">Add a Classroom +</a></li>
          </ul>

          <ul class="nav nav-sidebar" id="topicList" data-session="{{Session::get('sessionToken')}}">
            <li>
                <h4 style="margin-left:10px">Chapter(s)</h4>
            </li>
          </ul>
      
          <ul class="nav nav-sidebar">
            <li>
                <li><a href="#">Classroom Manager</a></li>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        @yield('content')
      </div>
    </div>
  </body>
</html>