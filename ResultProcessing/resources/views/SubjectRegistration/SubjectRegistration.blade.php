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
		
			<form class="form-horizontal" method="post" action="{{ route('route.subjectPost')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<legend>Subject Registration Form</legend>
				

			      		<div class="control-group">
								<label class="control-label"></label>
			      				<div class="controls">

										Select Class: <select onchange="subject('subject_id',this.selectedIndex);" id="semester" name ="semester" ></select>
									
										Select Subject: <select onchange="('',this.selectedIndex);" name ="subject_id" id ="subject_id"></select>
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