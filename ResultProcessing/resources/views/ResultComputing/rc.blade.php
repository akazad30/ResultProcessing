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
		
			<form class="form-horizontal" method="post" action="{{ route('route.resultPost')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<legend>Subject Registration Form</legend>
						
					       


			      		<div class="control-group">
								<label class="control-label"></label>
			      				<div class="controls">

									
					        <label class="control-label">Please Selct Class: {{ $class }}</label>	Select Class: <select onchange="subject('subject_id',this.selectedIndex);" id="semester" name ="semester"></select>
									
										Select Subject: <select onchange="('',this.selectedIndex);" name ="subject_id" id ="subject_id"></select>
			      				</div>
			      		</div>


					       <div class="control-group">
			        <label class="control-label">Session:</label>
			        <div class="controls">
			          <select class="selectpicker" name="session" >
							  <option value="Select class=">Select Session</option>
							  <option>2006</option>
							  <option>2007</option>
							  <option>2008</option>
							  <option>2009</option>
							  <option>2010</option>
							  <option>2011</option>
							  <option>2012</option>
							  <option>2013</option>
							  <option>2014</option>
							  <option>2015</option>
							  <option>2016</option>
							  <option>2017</option>
						</select>
			        </div>

			      </div>

			            <div class="control-group">
					        <label class="control-label">Student:</label>
						        <div class="controls">
						          	<select class="selectpicker" name="student" >
						          		<option>Select Student</option>
						          		@foreach($data as $row)
						          		<option>{{ $row->fullName}}</option>
						          		@endforeach
									</select>
						        </div>
						</div>

					<div class="form-group">
					    <div class="control-group">
					        <label class="control-label">Test1</label>
					        <div class="controls">
					          <input type="text" value="" name="test1">
					        </div>
					    </div>


					    <div class="control-group">
					        <label class="control-label">Test2</label>
					        <div class="controls">
					          <input type="text" value="" name="test2">
					        </div>
					    </div>

					    <div class="control-group">
					        <label class="control-label">Test3</label>
					        <div class="controls">
					          <input type="text" value="" name="test3">
					        </div>
					    </div>

					    <div class="control-group">
					        <label class="control-label">ExamMark</label>
					        <div class="controls">
					           <input type="text" value="" name="exam">
					        </div>
					    </div>	

					</div>


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