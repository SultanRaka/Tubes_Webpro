
<div class="inner-container" style="padding-top:10%; display:flex;	">


	<div style="display:flex;">
		<div class="item-bar" >
			<div>
				<p><b>Menampilkan ... Produk dalam Keranjang	</b></p>
			</div>
			<?php foreach ($cart_item as $item): $total = $item->harga; ?>
			<div class="container-fluid" style="display:flex;" >
				<div style="display:flex; width:350px; max-width:350px;">
					<div>
						<img style="width:83px; height:118px;" src="<?= $item->link_image ?>" alt="">
					</div>
					<div style="padding:0 20px 0;">
						<h5><?= $item->nama ?></h5>
						<h6><?= $item->id_penulis ?></h6>
						<h5><?= $item->cover ?></h5>
						<h3>Rp.<?= number_format($item->harga,2,",",".");  ?></h3>
					</div>
				</div>
				<div style="display:flex; width:150px; max-width:150px;">
					<div class="quantity" style="">
						<input type="button" value="+" class="plus">
						<input type="number" step="1" max="99" min="1" value="1" class="qty" size="4">
						<input type="button" value="-" class="minus">
					</div>
				</div>
				<div style=" width:150px; max-width:150px;" >
					<div  style="text-align:right; left:100px;">
						<h5>Subtotal</h5>
						<h4>Rp.<?= number_format($item->harga,2,",",".");?></h4>
						<?php $total= $total + $item->harga;	 ?>
					</div>
				</div>
			</div>

		<?php endforeach ?>

		</div>
		<div class="sidenav" style="padding-top:25px;">
			<div class="side-element">
				<div class="container-fluid">
					<span style="float:left;">Total <?= $count_result ; ?> Jumlah Produk</span>
					<span  style="float:right;"> Rp.<?= $total; ?> </span>
				</div>
				<div align="center" style="padding-top:20px;">
					<button type="button" name="button" style="width:270px; height:40px; border-radius:10px;">LANJUTKAN PEMBAYARAN</button>
				</div>
			</div>
		</div>
	</div>
</div>
