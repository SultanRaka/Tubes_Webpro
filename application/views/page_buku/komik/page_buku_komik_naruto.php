<!doctype html>
<html lang="en">
	
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Naruto</title>
	
    
  </head>
  <body>
	  <?php $id = 10?>
	
	</br>
	<div class="row">
			<div class="col-sm-2 " align="center"></div>
			<div class="col-sm-2 " align="center">
				<img src="<?php echo base_url('img/buku/komik/naruto.jpg'); ?>" width="315" height="500">
			</div>
			<div class="col-sm-1 " align="center"></div>
			<form action="<?php echo base_url(). 'index.php/welcome/tambah_aksi'; ?>" method="post">
				<div class="col-sm-7">
					<h2 class="font-weight-bold">Judul</h2>
					<h3><input type="text" name="judul" value="<?php echo $buku[$id]->judul; ?>" readonly></h3>
					<h2 class="font-weight-bold">Author</h2>
					<h3><?php echo $buku[$id]->author; ?></h3>
					<h2 class="font-weight-bold">Kategori</h2>
					<h3><?php echo $buku[$id]->kategori; ?></h3>
					<h2 class="font-weight-bold">Deskripsi</h2>
					<h3><?php echo $buku[$id]->deskripsi; ?></h3>
					<h2 class="font-weight-bold">Harga</h2>
					<h3><input type="text" name="harga" value="<?php echo $buku[$id]->harga; ?>" readonly></h3>
					<input type="submit" value="beli">
				</div>
			</form>
		</div>
  </body>
 </html>

