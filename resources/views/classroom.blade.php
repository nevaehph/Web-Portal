@extends('template')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Student Score by Topic</h1>
  <div>
	  <ul class="nav nav-tabs" role="tablist">
	  	@foreach($topicInfo as $topic)
	    	<li role="presentation" class="{{($loop->index)+1 == 1 ? 'active' : ''}}">
	    		<a href="#topic{{($loop->index)+1}}" aria-controls="topic{{($loop->index)+1}}" role="tab" data-toggle="tab">
	    			{{$topic["name"]}}
	    		</a>
	    	</li>
	    @endforeach
	  </ul>
  </div><br>
  <div class="tab-content">
  	@foreach($topicInfo as $topic)
	    <div role="tabpanel" class="tab-pane {{($loop->index)+1 == 1 ? 'active' : ''}}" id="topic{{($loop->index)+1}}">
		    <div class="table-responsive">
		      <table id="topic{{($loop->index)+1}}_table" class="table table-striped">
		        <thead>
		          <tr>
		            <th>Facebook ID</th>
		            <th>Student Name</th>
		            <th>Student Score</th>
		          </tr>
		        </thead>
		        <tbody>
	    		@if(!empty($topic["scoreList"]))
			        @foreach($topic["scoreList"] as $score)
			          <tr>
			            <td>{{$score['facebookId']}}</td>
			            <td>
			            	<a href="/studentScore/{{$topic["topicId"]}}/{{$score['facebookId']}}/{{$score['studentName']}}">
			            		{{$score['studentName']}}
			            	</a>
			            </td>
			            <td>{{$score['score']}}</td>
			          </tr>
			        @endforeach
			    @endif
		        </tbody>
		      </table>
		    </div>
	    </div>
		<script>
			$(document).ready(function(){
				$('#topic{{($loop->index)+1}}_table').DataTable();
			});
		</script>
    @endforeach
  </div>
@endsection
