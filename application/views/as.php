<nav class="navbar navbar-expand-xl navbar-dark bg-black fixed-top">
    <div class="col-md-12 no-border">
      <div class="inner-container">
        <img src="<?= base_url('img/logo/gramed2.png')  ?>" style="float:left; height:36px;">

      </div>
    </div>
</nav>
  <div class="inner-container" style="padding-top:5%;">
    <div class="container-fluid" style="display:flex;">
      <div class="container-fluid">
        <h1 style="padding-bottom:20px;">Daftar</h1>
        <form action="<?php echo base_url(). 'index.php/welcome/register_user'; ?>" method="post"  style="max-width:350px;">
          <div class="no-border">
            <input type="text" name="name" placeholder="Nama Lengkap" style="width:400px; height:20px; ">
          </div>
          <div class="no-border">
            <input type="text" name="email" placeholder="Email" style="width:400px; height:20px; ">
          </div>
          <div class="no-border">
              <input type="password" name="password" placeholder="Kata Sandi" style="width:400px;height:20px; ">
          </div>
          <div style="display:flex; padding-top:20px;">
            <div> <input type="checkbox" name="" value=""   > </div>
            <div style="padding-left:10px;">
                Dengan pembuatan akun, Anda menyetujui <a href="#">syarat & ketentuan</a> Gramedia.com
            </div>
          </div>
          <div style="padding-top:20px;">
            <button type="submit" name="button" style="height:47px; width:390px;">Daftar</button>
          </div>
          <div style="padding-top:20px" align="center">
            Sudah mendaftar? <a href="#">Masuk</a>
          </div>
        </form>
      </div>
      <div class="container-fluid" style="border-left:1px solid black;">
        <div style="height:60px; width:380px; border:1px solid black; margin-left:50px;" align="center">
          <div style="margin-top:20px;">
            <a href="#">Daftar Dengan Facebook</a>
          </div>
        </div>
        <div style="height:60px; width:380px; border:1px solid black; margin-left:50px; margin-top:20px;" align="center">
          <div style="margin-top:20px;">
            <a href="#" >Daftar Dengan Google</a>
          </div>
        </div>
      </div>
    </div>
  </div>
