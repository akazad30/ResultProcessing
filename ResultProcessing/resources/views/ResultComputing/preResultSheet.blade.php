<!DOCTYPE html"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add To Cart Page</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
	<title> Semi Result Sheet Making</title>
</head>
<body>
		<div class="container">
		<h3>Semi Result Sheet</h3>
		<table border="1">
			<tr>
				<td>SI</td>
				<td>studentName</td>
				<td>Test1</td>
				<td>Test2</td>
				<td>Test3</td>
				<td>Exam</td>
				<td>Total</td>
				<td>Remark</td>
				<td>Sign</td>

			</tr>

			
				@foreach($data as $row)
					<tr>
						<td>1</td>
						<td>{{ $row->fullName}}</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
					</tr>
				@endforeach

		</table>


					<h1>Checking</h1>
						<form action="" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button class="btn btn-success">ShowResult</button>
			
						</form>

</body>
</html>
