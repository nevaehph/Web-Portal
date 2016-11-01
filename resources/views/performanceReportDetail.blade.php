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
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Student Performance Report - Detail</h1>
          <div style="margin-bottom:30px">
            <h4>Question 1: Lorem</h4>
            <p>Est temporis age naturali alterius incedere. Vi im ex de durationem facultates consumerem archimedes cognoscere. Ex erat in toga quid. Id sumi poni novi ab quid ulla. Rei rea nonnulli una jam contendo judiciis. Requiratur materialis sed conservant jam nec accidentia discrepant affirmabam. Se adeo dixi nemo at de duce novo ad quia. Hausi in vapor se nulla at. Hanc vera more non lus quis uno pati sit idem. Rem sap tacitus existat sic dicendo.?</p>
            <ul>
              <li><b>A.</b> Answer A</li>
              <li><b>B.</b> Answer B</li>
              <li><b>C.</b> Answer C</li>
              <li><b>D.</b> Answer D</li>
            </ul>
          </div>
          <div>

            <div class="table-responsive">
            <table id="table" class="table table-striped">
              <thead>
                <tr>
                  <th>Option</th>
                  <th>Answer</th>
                  <th>No. of Student Chose</th>
                  <th>% of Student Chose</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>A</td>
                  <td>Correct</td>
                  <td>12</td>
                  <td>33.3%</td>
                </tr>
                
                <tr>
                  <td>B</td>
                  <td></td>
                  <td>12</td>
                  <td>33.3%</td>
                </tr>

                <tr>
                  <td>C</td>
                  <td></td>
                  <td>3</td>
                  <td>8.3%</td>
                </tr>

                <tr>
                  <td>D</td>
                  <td></td>
                  <td>9</td>
                  <td>25%</td>
                </tr>

                <tr>
                  <td></td>
                  <td><b>Total: </b></td>
                  <td><b>36</b></td>
                  <td><b>100%</b></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div><a href="/performanceReport">Back</a></div>
          </div>
        </div>
      </div>
    </div>
    </div>

    
  </body>
</html>