<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="row" style="margin-top: 50px;">
		<div class="col-md"></div>
		<div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px; padding: 10px">
			<form action="proses_login.php" method="post">
				<h3 align="center">LOGIN Perpustakaan</h3>
				Username :
				<input type="text" name="username" value="" class="form-control">
				password :
				<input type="password" name="password" class="form-control">
				<br>
				<center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
			</form>
		</div>
		<div class="col-md"></div>
	</div>

</body>
</html>