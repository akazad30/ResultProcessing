<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
@include('HomePage.insideHeadElement')
@include('SubjectRegistration.script')
</head>
 
<body>
<div class="container">
	<div class="head">
		@include('HomePage.header')
		@include('HomePage.headerBottom')
	</div>

	<div class="content" style="background-color:#995936;margin-left:60px; padding-left:150px;padding-right:50px;margin-top:5px;margin-bottom:250px; margin-right:100px;">
		
			<form class="form-horizontal" method="post" action="{{ route('route.finalResultSheet')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<legend>Detail With Total Form</legend> 

					    <div class="control-group">
					        <label class="control-label">StudentName:</label>
					        <div class="controls">
					          <input type="text" name="student" value="{{ $student }}">
					        </div>

					         <label class="control-label">Class:</label>
					        <div class="controls">
					          <input type="text" name="class" value="{{ $class }}">
					        </div>

					         <label class="control-label">Session:</label>
					        <div class="controls">
					          <input type="text" name="session" value="{{ $session }}">
					        </div>
					        
					    </div>

					    

					<table class="table">
							  <thead class="thead-inverse">
							    <tr>
							      <th>SI</th>
							      <th>Subject</th>
							      <th>Score/Total</th>
							       <th>Grade</th>
							    </tr>
							  </thead>

							  <tbody>
							    

							     
							      	@foreach($data as $row)
							      	<tr>
							      		<th scope="row">1</th>
							      		<td>{{ $row->subject}} </td> 
							      		<td name="total">{{ ($row->test1 + $row->test2 + $row->test3)/3 + $row->exam  }}</td>
							      		<td>{{ $total_subject}}</td>

							      	</tr>

							      	@endforeach

							      	@foreach($data as $row)
							      		<tr>
							      			<td>{{ $a = ($row->test1 + $row->test2 + $row->test3)/3 + $row->exam  }}</td>
							      			<td>{{ count($a)}}</td>

							      		</tr>

							      	@endforeach

							    	<h4>{{ ($row->test1 + $row->test2 + $row->test3)/3 + $row->exam  }} </h4>

							  </tbody>
					</table>


					    <div class="control-group">
					        <label class="control-label"></label>
					        <div class="controls">
					          <button type="submit" class="btn btn-success" style="margin-bottom:10px; margin-top: 30px">Submit</button>
					        </div>
					    </div>

				
			</form>
			<script language="javascript">semester("semester");</script>

	</div>

</div>


</body>
</html>