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
    <h1 class="page-header">Student Performance Report</h1>
    <div>

      <div class="table-responsive">
      <table id="table" class="table table-striped">
        <thead>
          <tr>
            <th>Question No.</th>
            <th>Question</th>
            <th>% of Correct Ans.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td><a href="/performanceReportDetail">1,001</a></td>
              <td>Lorem</td>
              <td>33.3%</td>
          </tr>
          <tr>
            <td>1,002</td>
            <td>amet</td>
            <td>100%</td>
          </tr>
          <tr>
            <td>1,003</td>
            <td>Integer</td>
            <td>30%</td>
          </tr>
          <tr>
            <td>1,003</td>
            <td>libero</td>
            <td>26.6%</td>
          </tr>
          <tr>
            <td>1,004</td>
            <td>dapibus</td>
            <td>75%</td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>

@endsection