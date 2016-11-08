@extends('template')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Question Details</h1>
  <div style="margin-bottom:30px">
    <h4>{{$questionDetails->questionText}}</h4>
    <ul>
      @foreach($questionDetails->optionArray as $option)
      <li>{{($loop->index)+1 . ". " . $option->optionText}}</li> 
      @endforeach
    </ul>
  </div>
  <div>

    <div class="table-responsive">
    <table id="table" class="table table-striped">
      <thead>
        <tr>
          <th>Option</th>
          <th>Number of Student Chose</th>
        </tr>
      </thead>
      <tbody>
        @foreach($questionDetails->optionArray as $option)
        <tr>
          <td>{{($loop->index)+1 . ". " . $option->optionText}}</td>
          <td>{{$option->chosenFrequency}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection