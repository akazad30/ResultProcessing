<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
@include('HomePage.insideHeadElement')
</head>
 
<body>
<div class="container">
	<div class="head">
		@include('HomePage.header')
		@include('HomePage.headerBottom')
	</div>
	<div class="content" style="background-color:#995936;margin-left:200px; padding-left:150px;padding-right:50px;margin-top:5px;margin-bottom:100px;width:600px">
			  <form class="form-horizontal" id="registration" method="post" action="{{ route('route.postStudentRegistration') }}" enctype="multipart/form-data">
			      <input type="hidden" name="_token" value="{{ csrf_token() }}">

			      <legend>Student Registration Form</legend>

			      <div class="control-group">
			        <label class="control-label" >Student_ID:</label>
			        <div class="controls">
			          <input type="text" id="student_id" placeholder="Enter student_id" name="student_id">
			        </div>
			      </div>

			      <div class="control-group">
			        <label class="control-label" >SurName:</label>
			        <div class="controls">
			          <input type="text" id="surName" placeholder="Enter surName" name="surName">
			        </div>
			      </div>
			      <div class="control-group">
			        <label class="control-label">FullName:</label>
			        <div class="controls">
			          <input type="text" id="fullName" placeholder="Enter fullName" name="fullName">
			        </div>
			      </div>


			      <div class="control-group">
			        <label class="control-label">Email:</label>
			        <div class="controls">
			          <input type="text" id="email" placeholder="Enter Email" name="email">
			        </div>
			        </div>

			      <div class="control-group">
			        <label class="control-label">Class:</label>
			        <div class="controls">
			          <select class="selectpicker" name="class" >
							  <option value="Select class=">Select Class</option>
							  <option>Six</option>
							  <option>Seven</option>
							  <option>Eight</option>
							  <option>Nine</option>
							  <option>Ten</option>
						</select>
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
			        <label class="control-label"></label>
			        <div class="controls">
			          <button type="submit" class="btn btn-success" >Submit</button>
			        </div>
			      </div>
			

			  </form>
		</div>	  
</div>
</body>
</html>