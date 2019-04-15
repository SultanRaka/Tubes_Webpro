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

	<title>Checkout Page</title>




  </head>
  <body>
	<?php
		$this->db->select('SUM(harga) as total');
		$this->db->from('orderan');
	?>
	<h2 class="font-weight-bold" align="center">Pembayaran</h2>
	</br>
	</br>
	<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
				<img src="<?php echo base_url('img/bank/sendiri.jpg'); ?>" width="596" height="272">
				<h3 align="center">Sendiri</h3>
				<h4 align="center">1234-1234-1234</h4>
			</div>
			<div class="col-sm-4">
				<img src="<?php echo base_url('img/bank/bini.jpg'); ?>" width="596" height="272">
				<h3 align="center">Bini</h3>
				<h4 align="center">123456789</h4>
			</div>
			<div class="col-sm-2"></div>
	</div>
	<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-4">
				<img src="<?php echo base_url('img/bank/dora.jpg'); ?>" width="596" height="272">
				<h3 align="center">Doraemon</h3>
				<h4 align="center">987654321</h4>
			</div>
			<div class="col-sm-4">
				<img src="<?php echo base_url('img/bank/panik.jpg'); ?>" width="596" height="272">
				<h3 align="center">Panik Bank</h3>
				<h4 align="center">4321-4321-4321</h4>
			</div>
			<div class="col-sm-2"></div>
	</div>
	<h2 align="center">Silahkan lakukan pembayaran melalui salah satu bank yang sudah tertera.</h2>
	<h2 align="center">Silahkan transfer sebesar Rp<?php echo $this->db->get()->row()->total; ?></h2>
	<h2 align="center">Pembayaran akan diverifikasi otomatis oleh kami</h2>
	<h2 align="center">Terima kasih telah berbelanja di Gramediul!</h2>
	<h3 align="center"><?php echo anchor('welcome/wipe','Kembali'); ?></h3>
	</br>
  </body>
 </html>
