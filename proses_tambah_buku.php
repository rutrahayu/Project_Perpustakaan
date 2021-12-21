<?php
if($_POST){
	$judul_buku=$_POST['judul_buku'];
	$deskripsi=$_POST['deskripsi'];
	if(empty($judul_buku)) {
		echo "<script>alert('Nama Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";

	} elseif(empty($deskripsi)){
		echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_buku.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into buku (judul_buku, deskripsi) value ('".$judul_buku."','".$deskripsi."')");
		if($insert){
			echo"<script>alert('Sukses menambah data buku');location.href='buku.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data buku');location.href='tambah_buku.php';</script>";
			
		}
	}
}
?>