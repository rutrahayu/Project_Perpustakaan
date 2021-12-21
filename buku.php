<?php
    include "header.php";
?>
<h2>Daftar Buku</h2>
<a href="tambah_buku.php" onclick="return confirm('Apakah anda yakin menambah data ini?')" class="btn btn-success">Tambah Buku</a> | <a href="home.php" class="btn btn-success"> Kembali </a>
<div class="row">
	<?php
	include "koneksi.php";
	$qry_buku=mysqli_query($conn, "select * from buku");
	while($dt_buku=mysqli_fetch_array($qry_buku)){
		?>
		<div class="col-md-3">
			<div class="card">
				<img src="gambar.jpg" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title"><?=$dt_buku['judul_buku']?></h5>
					<p class="card-text"><?=substr($dt_buku['deskripsi'],0,20)?></p>
					<a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
					
				</div>
				
			</div>
			
		</div>
		<?php
	}
	?>
</div>
<?php
include "footer.php";
?>