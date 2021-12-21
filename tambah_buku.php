<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
	<h3><center> Tambah Buku </h3></center>
	<form action="proses_tambah_buku.php" method="post">
		<label>Judul Buku : </label> <br>
		<center><input type="text" name="judul_buku" value="" class="form-control" ></center>
        <br> 
		<label>Deskripsi : </label> <br>
		<center><input type="text" name="deskripsi" value="" class="form-control"></center><br>
		<center><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></center>
	</form>
      
</body>
</html>