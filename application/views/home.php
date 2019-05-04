      <div class="container-fluid"style=" padding-top:80px;">
        <div class="inner-container" >
            <div class="container-fluid">
              <a style="float:right; padding:25px 0 16px 0;" href="<?= site_url();?>/Welcome/promo" class="rightanchor">Lihat semua</a>
            </div>
            <div  id="homepromos">
              <div id="promocarousel" class="carousel slide" data-ride="carousel" style="cursor:grab; touch-action:pan-y;">
                <ol class="carousel-indicators">
                  <li data-target="#promocarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#promocarousel" data-slide-to="1"></li>
                  <li data-target="#promocarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-responsive" src="<?php echo base_url('/img/promo/1.png') ?>" alt="Slide 1" />
                  </div>
                  <div class="carousel-item">
                    <img class="img-responsive" src="<?php echo base_url('/img/promo/2.jpg') ?>" alt="Slide 2" />
                  </div>
                  <div class="carousel-item">
                    <img class="img-responsive" src="<?php echo base_url('/img/promo/3.jpg') ?>" alt="Slide 3" />
                  </div>
                 </div>
                 <a class="left carousel-control" href="#promocarousel" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#promocarousel" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                 </a>
               </div>
              <div id="smallcarousel">
                <div class="square">
                  <a href="#"><img  src="<?php echo base_url('img/promo/A.jpg') ?>" /></a>
                </div>
                <div class="square" style="margin-top:7px;">
                  <a href="#"><img  src="<?php echo base_url('img/promo/B.jpg') ?>" /></a>
                </div>
              </div>
            </div>
        </div>
		  </div>
      <div class="container-fluid paddinghometop" >
          <div class="inner-container" align="center" id="homemenus" >
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/1._buku_baru__w200_hauto.png" alt="">
              <p align="center">Buku Baru</p>
            </a>
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/3._buku_pilihan__w200_hauto.png" alt="">
              <p align="center">Buku Pilihan</p>
            </a>
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/5._print_on_demaand__w200_hauto.png" alt="">
              <p align="center">Print On Demand</p>
            </a>
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/6._gaya_hidup_MTgTKto__w200_hauto.png" alt="">
              <p align="center">Gaya Hidup</p>
            </a>
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/7._elektronik_dan_It__w200_hauto.png" alt="">
              <p align="center">Elektronik & IT</p>
            </a>
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/8._eversac__w200_hauto.png" alt="">
              <p align="center">Eversac</p>
            </a>
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/9._Harga_Spesial__w200_hauto.png" alt="">
              <p align="center">Buku Import</p>
            </a>
            <a href="#">
              <img src="https://cdn.gramedia.com/uploads/highlighted_menu/3._buku_pilihan__w200_hauto.png" alt="">
              <p align="center">Harga Spesial</p>
            </a>
          </div>
      </div>
      <div class="container-fluid paddinghometop">
        <div class="inner-container flash-sale-container" >
          <div class="item-section">
            <div class="col-md-2 container-fluid" style="padding:340px 0 0px; padding-left:45px;">
              <button  type="button" name="button" onclick="window.location.href='<?= site_url() ?>/Welcome/flash'">  Lihat Semua</button>
            </div>
            <div class="col-md-10 main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "freeScroll": true }'>

          <?php
            foreach($sale_item as $item){?>
              <a href="#">
                <div class="carousel-cell">
                  <div class="card">
                    <a href="<?= site_url() ?>/Welcome/bookpage/<?= $item->id_buku; ?>" style="text-decoration:none;">
                      <img class="card-img-top" src="<?= $item->link_image; ?>" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title"><?= $item->nama; ?></h4>
                        <h5><?= $item->penerbit; ?></h5>
                        <h5><?= $item->harga ;?></h5>
                      </div>
                    </a>
                    </div>
                </div>
              </a>
          <?php } ?>



          </div>
        </div>
      </div>
      <div class="container-fluid home-cards paddinghometop">
        <div class="inner-container">
          <div class="container-fluid">
            <h1 style="float:left;">Buku-Buku Terpopuler</h1>
            <a style="float:right; margin-top:15px;" href="#" class="rightanchor">Lihat semua</a>
          </div>
          <div class="item-container" style="display:flex;">
            <div class="side-card">
                <a href="#"> <img src="<?php echo base_url('img/banner/popu.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container-fluid home-cards paddinghometop">
        <div class="inner-container">
          <div class="container-fluid">
            <h1 style="float:left;">Novel Paling Laris</h1>
            <a style="float:right; margin-top:15px;" href="#" class="rightanchor">Lihat semua</a>
          </div>
          <div class="item-container" style="display:flex;">
            <div class="side-card">
                <a href="#"> <img src="<?php echo base_url('img/banner/A.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container-fluid home-cards paddinghometop">
        <div class="inner-container">
          <div class="container-fluid">
            <h1 style="float:left;" >Ajak si Kecil Membaca</h1>
            <a style=" float:right; margin-top:15px;" href="#" class="rightanchor">Lihat semua</a>
          </div>
          <div class="item-container" style="display:flex;">
            <div class="side-card">
                <a href="#"> <img src="<?php echo base_url('img/banner/B.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container-fluid home-cards paddinghometop">
        <div class="inner-container">
          <div class="container-fluid">
            <h1 style="float:left;">Komik-Komik Pilihan</h1>
            <a style="float:right; margin-top:15px;" href="#" class="rightanchor">Lihat semua</a>
          </div>
          <div class="item-container" style="display:flex;">
            <div class="side-card">
                <a href="#"> <img src="<?php echo base_url('img/banner/C.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="container-fluid home-cards paddinghometop">
        <div class="inner-container">
          <div class="container-fluid">
            <h1 style="float:left;" >Tampil Lebih Gaya</h1>
            <a style="float:right; margin-top:15px;" href="#" class="rightanchor">Lihat semua</a>
          </div>
          <div class="item-container" style="display:flex;">
            <div class="side-card">
                <a href="#"> <img src="<?php echo base_url('img/banner/D.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
            <div class="carousel-cell">
              <div class="card">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(11).jpg" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="inner-container">
        <div class="container-fluid">
          <h1 style="float:left">Brand Pilihan</h1>
          <a style="float:right; margin-top:15px;" href="#" class="rightanchor">Lihat semua</a>
        </div>
        <div class="container-fluid row" align="center">
          <div class="col-lg-2">
            <div class="col-lg-12 card">
              <a href="#"> <img style="max-height:84px; width:100%" src="https://cdn.gramedia.com/uploads/vendor/Logo.png" alt=""> </a>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="col-lg-12 card">
              <a href="#"> <img style="max-height:84px; width:100%" src="https://cdn.gramedia.com/uploads/vendor/milors-min.jpg" alt=""> </a>
            </div>
          </div>
          <div class="col-lg-2 ">
            <div class="col-lg-12 card">
              <a href="#"> <img style="max-height:84px; width:100%" src="https://cdn.gramedia.com/uploads/vendor/gramedia_gpu_PWogFpD.png" alt=""> </a>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="col-lg-12 card">
              <a href="#"> <img style="max-height:84px; width:100%" src="https://cdn.gramedia.com/uploads/vendor/PAGE_BANNER_GRAMEDIA_-_Final-02.jpg" alt=""> </a>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="col-lg-12 card">
              <a href="#"> <img style="max-height:84px; width:100%" src="https://cdn.gramedia.com/uploads/vendor/Logo_Brand_V0Miw8e.png" alt=""> </a>
            </div>
          </div>
          <div class="col-lg-2">
            <div class="col-lg-12 card">
              <a href="#"> <img style="max-height:84px; width:100%"src="https://cdn.gramedia.com/uploads/vendor/Logo_Brand_EPcGcvL.png" alt=""> </a>
            </div>
          </div>
        </div>
      </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
