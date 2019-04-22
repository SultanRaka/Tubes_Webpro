<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>wishlist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet"type="text/css" href="assets/plugin/datepicker/css/bootstrapt-datepicker.min.css">
    <script type="text/javascript" src="assets/plugin/datepicker/js/bootstrapt-datepicker.min.js"></script>
    <script src="assets/js/bootstrapt.min.js"></script>
    <link type="text/css"  href="bootstrap-datepicker/css/bootstrap-datepicker.css"  rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container" style="padding-top:10%;">
      <div class="row">
        <div class="col-md-4" style=" font-family:Karla,sans-serif;color:#281E5A;margin-top:200px;">
          <div class="halaman1" style="margin-left:200px;">
            <a  href="<?php echo base_url();?>index.php/Welcome/PesananSaya">Pesanan Saya </a>
            <br>
            <br>
            <a  href="<?php echo base_url();?>index.php/Welcome/akun">Akun Saya</a>
            <br>
            <br>
            <a  href="<?php echo base_url();?>index.php/Welcome/wishlistku"> Wishlist Saya </a>
            <br>
            <br>
            <br>
            <a  href="<?php echo base_url();?>index.php/Welcome/keluar"> Keluar </a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="">

            <a href="<?php echo base_url('index.php/welcome/heil')?>"><img src="<?php echo base_url('img/buku/sejarah/heil.jpg'); ?>" width="100" height="150" style="margin-top:200px;"></a>
            
          </div>
          <div class="">
            <h5>Meradang (Seeing Red)</h5>
						<h6>Sandra Brown</h6>
						<h5>Soft Cover</h5>
						<h3>Rp.90.400</h3>

          </div>
  				</br>
  				<a href="#">lihat detail</a>
          <br>
          <br>
          <button type="button" class="btn btn-light" style="margin-right:500px;">
            <span aria-hidden="true">&times;</span> Hapus Wishlist
            </button>
        </div>

      </div>

    </div>

  </body>
</html>
