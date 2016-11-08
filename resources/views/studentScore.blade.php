@extends('template')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Individual Student Score for  {{$studentName}}</h1>

   
	
 
  <div>
    <div class="table-responsive">
    <table id="table" class="table table-striped">
      <thead>
        <tr>
          <th>Attempt ID</th>
          <th>Student Score</th>
          <th>Attempt Date</th>
        </tr>
      </thead>
      <tbody id="tableBody">
	   @foreach($studentInfo as $student)
		<tr>
			<td>{{$student['attemptId']}}</td>
			<td>{{$student['score']}}</td>
			<td>{{$student['dateTime']}}</td>
		</tr>
		 
	 @endforeach
      </tbody>
    </table>
  </div>
  </div>
</div>



@endsection
