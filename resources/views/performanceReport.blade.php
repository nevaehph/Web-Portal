@extends('template')
@section('content')
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">{{$topicName}}</h1>
    <div>
      <div class="table-responsive">
      <table id="table" class="table table-striped">
        <thead>
          <tr>
            <th>Question No.</th>
            <th>Question</th>
            <th>No of Students Attempted</th>
            <th>% of Correct Ans.</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($topicQuestions as $question)
          <tr>
            <td>{{($loop->index)+1}}</td>
            <td>{{$question["questionText"]}}</td>
            <td>{{$question["noStudentsAttempted"]}}</td>
            <td>{{$question["percentageCorrect"]}}</td>
            <td>
              <a class="btn btn-primary" href="/question/{{$question["questionId"]}}">
                View Details
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>
@endsection