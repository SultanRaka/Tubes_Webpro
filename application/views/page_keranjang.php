
<div class="inner-container" style="padding-top:10%">
	<div>
		<p><b>Menampilkan ... Produk dalam Keranjang	</b></p>
	</div>
</div>

	<div class="row">
			<div class="col-sm-12 " align="center">
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
