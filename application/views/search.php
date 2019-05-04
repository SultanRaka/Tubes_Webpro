<div class="inner-container" style="padding-top:7%" >
  <p style="padding:10px 0 10px;">Hasil Pencarian .....</p>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Produk</a></li>
    <li><a data-toggle="tab" href="#produk">Penulis</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active" >
      <div class="container-fluid" style="display:flex;">
        <div class="">
          <h3>Filter</h3>
          <h4>Kategori</h4>
          <div class="">
            <a data-toggle="collapse" href="#democollapseLink" aria-expanded="false"
            aria-controls="democollapseLink" class="dropdown-toggle">Ebook</a>
            <div class="collapse" id="democollapseLink">
              <a href="#">Adult Fiction</a>
            </div>
          </div>
          <h4>Harga</h4>
          <h5>Minimum</h5>
          <div style="border: 1px solid black; width:230px; height:40px; display:flex;">
            <div style="float:left; padding:7px 10px 5px;">
              <p>Rp</p>
            </div>
            <div class="float:right;">
              <input type="number"  style="text-align:right; width:180px; height:35px; " >
            </div>
          </div>
          <h5>Maximum</h5>
          <div style="border: 1px solid black; width:230px; height:40px; display:flex;">
            <div style="float:left; padding:7px 10px 5px;">
              <p>Rp</p>
            </div>
            <div class="float:right;">
              <input type="number"  style="text-align:right; width:180px; height:35px; " >
            </div>
          </div>
          <h4>Filter Berdasarkan Stok</h4>
          <div class="">
            <form class="" action="index.html" method="post">
              <input type="radio" name="stok" value="semua"> Semua <br>
              <input type="radio" name="stok" value="tersedia">Tersedia
            </form>
          </div>
          <div class="">
            <a href="#">Reset</a>
          </div>
        </div>
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="dropdown" style="float:right;">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Terbaru
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">Terpopuler</button>
                <button class="dropdown-item" type="button">Harga Terendah</button>
                <button class="dropdown-item" type="button">Harga Tertinggi</button>
              </div>
            </div>
          </div>
          <div class="container-fluid">
            <h4>Menampilkan 1-20 dari Produk</h4>
          </div>
          <div style="display:flex;">
            <?php foreach($buku as $item) :  ?>
              <div class="carousel-cell" >
                <div class="card" style="height:100px;">
                    <img class="card-img-top" src="<?= $item->link_image ?>" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title"><?= $item->nama ?></h4>
                      <p class="card-text"><?= $item->penerbit ?></p>
                      <p class="card-text"><?= $item->harga ?></p>
                    </div>
                </div>
              </div>
            <?php endforeach ?>

          </div>
        </div>

      </div>
    </div>
    <div id="produk" class="tab-pane fade">
      <div class="container-fluid">
        <div class="">
          <h4>Menampilkan ... dari ... result</h4>
        </div>
        <div class="">
          <div style="display:flex;">
            <div class="container-fluid" style="width:300px; height:150px; border:1px solid black; display:flex;">
              <div style="padding:30px 0 0;">
                <img src="https://www.gramedia.com/assets/default-images/author.svg" alt="">
              </div>
              <div style="padding:5% 20px 5%; ">
                <h4>Yasmin A</h4>
                <h5>Buku Terbaru</h5>
                <h5>Buku : 2</h5>
              </div>
            </div>
            <div class="container-fluid" style="width:300px; height:150px; border:1px solid black; display:flex;">
              <div style="padding:30px 0 0;">
                <img src="https://www.gramedia.com/assets/default-images/author.svg" alt="">
              </div>
              <div style="padding:5% 20px 5%; ">
                <h4>Yasmin A</h4>
                <h5>Buku Terbaru</h5>
                <h5>Buku : 2</h5>
              </div>
            </div>
            <div class="container-fluid" style="width:300px; height:150px; border:1px solid black; display:flex;">
              <div style="padding:30px 0 0;">
                <img src="https://www.gramedia.com/assets/default-images/author.svg" alt="">
              </div>
              <div style="padding:5% 20px 5%; ">
                <h4>Yasmin A</h4>
                <h5>Buku Terbaru</h5>
                <h5>Buku : 2</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
