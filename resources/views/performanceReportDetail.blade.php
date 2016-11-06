@extends('template')
@section('content')
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
          <th>% of Student Chose</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>A</td>
          <td>Correct</td>
          <td>33.3%</td>
        </tr>
        
        <tr>
          <td>B</td>
          <td></td>
          <td>33.3%</td>
        </tr>

        <tr>
          <td>C</td>
          <td></td>
          <td>8.3%</td>
        </tr>

        <tr>
          <td>D</td>
          <td></td>
          <td>25%</td>
        </tr>

        <tr>
          <td></td>
          <td><b>Total: </b></td>
          <td><b>100%</b></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div><a href="/performanceReport">Back</a></div>
  </div>
</div>
</div>
@endsection