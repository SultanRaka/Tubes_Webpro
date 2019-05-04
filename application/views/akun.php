
    <div class="inner-container" style="display:flex; padding-top:10%;">
      <ul class="nav nav-pills col-sm-2 col-md-2" style="display:block;">
        <li class=""><a href="#tab_a" data-toggle="pill">Pesanan Saya</a></li>
        <li class=""><a href="#tab_b" data-toggle="pill">Akun Saya</a></li>
        <li class=""><a href="#tab_c" data-toggle="pill">Wishlist Saya</a></li>
        <li><a href="#tab_d" data-toggle="pill">Keluar</a></li>
      </ul>
      <div class="tab-content col-sm-10 col-md-10">
        <div class="tab-pane fade show active" id="tab_a">
        </div>
        <div class="tab-pane fade" id="tab_b">
          <div class="halaman2" style="padding:10px;">
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Biodata</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar Alamat</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pembayaran</a>
            </div>
            <div class="tab-pane fade show in active" id="nav-home" >
              <form action="<?php echo site_url('Welcome/update_pengguna')?>" method="post">
                <div class="rounded-lg user-form-banner" ><a> Berlangganan Newsletter </a></div>
                <div class="user-form-label"> <a >Nama Lengkap</a></div>
                <div class="no-border no-border-fix">
                  <input type="text" name="nama"  value="<?php echo $user['nama']; ?>" style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                </div>
                <div class="user-form-label"><a style="">Email</a></div>
                <div class="no-border no-border-fix" >
                  <input type="text" name="email" value="<?php echo $user['email']; ?>"style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                </div>
                <div >
                  <a href="#">Verifikasi Email Saya</a>
                </div>
                <div class="user-form-label"><a style="">Jenis Kelamin</a></div>
                <label class="radio-inline" style="font-family:Karla,sans-serif;">
                  <input type="radio" name="gender" checked=<?php if($user['gender'] = "Laki-Laki") { echo "true"; }?>  value="Laki=Laki">Laki-Laki
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" checked=<?php if($user['gender'] = "Rahasia") { echo "true"; }?>  value="Laki=Laki">Rahasia
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" checked=<?php if($user['gender'] = "Perempuan") { echo "true"; }?>  value="Perempuan">Perempuan
                </label>
                <div class="user-form-label"><a style="">Tanggal Lahir</a></div>
                <input type="date" name="birthdate" value="<?php echo $user['birthdate'] ?>">
                <div class="user-form-label"><a style="">No.Telp</a></div>
                <div class="no-border no-border-fix" >
                  <input type="text" name="telp" placeholder="" value="<?php echo $user['telp']; ?>" style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                </div>
                <div class="user-form-label"><a style="">Profesi atau Pekerjaan</a></div>
                <select name="job" class="form-control" id="sel1" value="<?php echo $options['job'] ?>">
                    <option value="<?php echo $user['job'];?>" selected="selected"><?php echo $user['job'];?></option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Pegawai Negeri">Pegawai Negeri</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Guru/Dosen">Guru/Dosen</option>
                    <option value="Pengusaha">Pengusaha</option>
                </select>
                <div class="user-form-label"><a style="">Hobi</a></div>
                <select name="hobi" class="form-control" id="sel1" value="<?php echo $options['hobi']; ?>">
                    <option value="<?php echo $user['hobi'];?>" selected="selected"><?php echo $user['hobi'];?></option>
                    <option value="Kecantikan">Kecantikan</option>
                    <option value="Otomotif">Memancing</option>
                    <option value="Membaca">Berkebun</option>
                    <option value="Berkebun">Olahraga</option>
                    <option value="Olahraga">melukis</option>
                </select>
                <div class="user-form-label"><a style="">Kategori Buku Favorite</a></div>
                <select name="favbook" class="form-control" id="sel2" value="<?php echo $options['favbook']; ?>">
                    <option value="<?php echo $user['favbook'];?>" selected="selected"><?php echo $user['favbook']?></option>
                    <option value="Pegawai Swasta">Buku Anak</option>
                    <option value="Pegawai Negeri">Agama</option>
                    <option value="Dokter">Fiksi</option>
                    <option value="Guru/Dosen">Novel</option>
                    <option value="Pengusaha">Horror</option>
                </select>
                <br>
                <button type="submit" class="btn btn-pink"
                style="background: #e61e64; color: #FFFFFF;font-family:Karla, sans-serif;
                margin: 15px 0px; padding: 10px 45px; ">
                    SIMPAN
                </button>
                <br><a href="#">Ubah Kata Sandi</a>
              </form>
            <div class="tab-pane fade " id="nav-profile">
            </div>
            <div class="tab-pane fade " id="nav-contact">
              <div class="">
                <h4>Kartu Kredit</h4>
                <h5>Data kartu Kredit Anda dijamin keamanannya oleh Visa dan MasterCard</h5>
                <h5>Anda belum menyimpan data Kartu Kredit</h5>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="tab-pane fade" id="tab_c">
          <?php foreach($wishlist as $item) :  ?>
          <div class="container-fluid">
            <div style="display:flex;">
              <div class="">
                <a href="<?= site_url('Welcome/bookpage/')?><?= $item->id_buku ?>">
                  <img src="<?= $item->link_image; ?>" width="100" height="150" >
                </a>
              </div>
              <div style="padding:0px 20px 0px;">
                <a href="#"><h4><?= $item->nama; ?></h4></a>
                <a href="#"><h5><?= $item->id_penulis; ?></h5></a>
              </div>
            </div>
            <div style="padding-top:10px;"><a href="<?= site_url('Welcome/bookpage/')?><?= $item->id_buku ?>">Lihat Detail</a></div>
            <button type="button" class="btn btn-light" style="float:right;">
            <span aria-hidden="true">&times;</span> Hapus Wishlist</button>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
