<?php
    include "header.php";
    include "koneksi.php";
    $qry_detail_buku=mysqli_query($conn, "select * from buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
    ?>
    <h2>Pinjam Buku</h2>
    <div class="row">
    	<div class="col-md-4">
    		<img src="gambar.jpg" class="card-img-top">
    	</div>
    	<div class="col-md-8">
    		<form action="masukkan_keranjang.php?id_buku=<?=$dt_buku['id_buku']?>" method="POST">
    			<table class="table table-hover table striped">
    				<thead>
    					<tr>
    						<td>Judul Buku</td>
    						<td><?=$dt_buku['judul_buku']?></td>
    					</tr>
    					<tr>
    						<td>Deskripsi</td>
    						<td><?=$dt_buku['deskripsi']?></td>
    					</tr>
    					<tr>
    						<td>Jumlah Pinjam</td>
    						<td><input type="number" name="pinjam_buku" value="1"></td>
    					</tr>
    					<tr>
    						<td colspan="2"><input class="bt btn-success" type="submit" value="PINJAM"></td>
    					</tr>
    				</thead>
    			</table>
    			
    		</form>
    		
    	</div>
    </div>
    <?php
    include "footer.php";
    ?>