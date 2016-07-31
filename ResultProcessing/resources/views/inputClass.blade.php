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
			  <form class="form-horizontal" id="registration" method="post" action="{{ route('route.postClass') }}" enctype="multipart/form-data">
			      <input type="hidden" name="_token" value="{{ csrf_token() }}">

			      <legend>Input Class</legend>

			     
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