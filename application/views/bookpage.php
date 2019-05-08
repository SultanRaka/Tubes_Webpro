
<div class="inner-container" style="padding-top:10%;">
  <div style="display:flex;">
    <div class="">
      <div class="">
        <img src="<?= $book['link_image']; ?>" style="width:200px; height:300px;">
      </div>
      <div style="display:flex; padding:10px 0px 10px;">
        <p>Bagikan : </p>
        <a href="#" style="padding:0px 10px 0px;;">
          <img src="https://www.gramedia.com/assets/social-icon/facebook-9.svg">
        </a>
        <a href="#"><img src="https://www.gramedia.com/assets/social-icon/twitter-5.svg" ></a>
      </div>
    </div>
    <div class="" style="padding-right:200px; padding-left:50px;">
      <h2><?= $book['nama'];?></h2>
      <h3>Random House Us</h3>
    </div>
    <div style="width:262px">
      <div class="" style="border:1px solid black; width:100%; height:102px; padding-top: 25px; padding-left:10px;">
        <div class="">
          <p><?= $book['cover']; ?> Cover</p>
        </div>
        <div class="">
          <p>Rp.<?= $book['harga']; ?></p>
        </div>
      </div>
      <div class="" align="center">
        <div class="" style="padding:5% 0 5%;">
          <button type="button" name="button" style="width:100%; height:40px; border-radius:4px;"
          onclick=" window.location = ' <?= site_url('Welcome/tambah_keranjang');?>/<?= $id ?>'">Beli Sekarang</button>
        </div>
        <div class="">
          <button type="button" name="button" style="width:100%; height:40px; border-radius:4px;">Tambah Wishlist</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
  		<ul class="nav nav-tabs">
  			<li><a data-toggle="tab" href="#bookdescription">Deskripsi</a></li>
  			<li><a data-toggle="tab" href="#bookdetail">Detail</a></li>
  		</ul>
  		<div class="tab-content">
  			<div id="bookdescription" class="tab-pane fade in active">
          <p><?= $book['deskripsi']; ?></p>
  			</div>
  			<div id="bookdetail" class="tab-pane fade">
          <div style="display:flex;">
            <div class="">
              <p>Jumlah Halaman</p>
              <p>Tanggal Terbit</p>
              <p>ISBN</p>
              <p>Bahasa</p>
              <p>Penerbit</p>
              <p>Berat</p>
              <p>Lebar</p>
              <p>Panjang</p>
            </div>
            <div class="">
              <p><?= $book['halaman']; ?></p>
              <p><?= $book['tanggal_terbit']; ?></p>
              <p><?= $book['ISBN']; ?></p>
              <p><?= $book['bahasa']; ?></p>
              <p><?= $book['penerbit']; ?></p>
              <p><?= $book['berat']; ?></p>
              <p><?= $book['lebar']; ?></p>
              <p><?= $book['panjang']; ?></p>
            </div>
          </div>
  			</div>
  		</div>
  	</div>
</div>
