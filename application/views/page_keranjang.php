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
	
	<title>Keranjang</title>
	
	
	
    
  </head>
  <body>
	<!-- untuk tabel pesanan -->
	<div class="row">
			<div class="col-sm-12 " align="center">
				<h2 class="font-weight-bold">Keranjang</h2>
			</div>
	</div>
	
	<!-- tampilkan item -->
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>id</th>
			<th>Judul</th>
			<th>Harga</th>
		</tr>
		<?php 
		$query = $this->db->get('orderan');
		$result = $query->result();
		$no = 1;
		foreach($result as $o){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $o->id ?></td>
			<td><?php echo $o->judul ?></td>
			<td><?php echo $o->harga ?></td>
			<td>
				<?php echo anchor('welcome/hapus/'.$o->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<?php
				$this->db->select('SUM(harga) as total');
				$this->db->from('orderan');
			?>
			<td colspan="3">Total:</td>	
			<td>  <?php echo $this->db->get()->row()->total; ?> </td>
		</tr>
	</table>
	
	<!-- untuk informasi pengguna -->
	
	<div class="row">
			<div class="col-sm-12 " align="center">
				<h2 class="font-weight-bold">Detil Pengiriman</h2>
				<h4>Nama: <?php echo $this->session->userdata('nama');?></h4>
				<h4>Alamat: <?php echo $this->session->userdata('alamat');?></h4>
				<h4>Email: <?php echo $this->session->userdata('email');?></h4>
				
			</div>
	</div>
	<div class="row">
			<div class="col-sm-12 " align="center">
				<a href="<?php echo base_url('index.php/Welcome/checkout')?>">
					<button type="button" class="btn btn-success">Checkout</button>
				</a>
			</div>
	</div>

  </body>
 </html>

