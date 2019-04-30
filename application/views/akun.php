
    <div class="container" style="margin-top:200px; padding:10;">
      <div class="row">
        <div class="col-md-4" style=" font-family:Karla,sans-serif; font-size: 16px;color:#281E5A;">
          <div class="halaman1" style="margin-left:200px;">
            <a  href="<?php echo base_url();?>index.php/Welcome/PesananSaya">Pesanan Saya </a>
            <br>
            <br>
            <a  href="<?php echo base_url();?>index.php/Welcome/akun">Akun Saya</a>
            <br>
            <br>
            <a  href="<?php echo base_url();?>index.php/Welcome/wishlist"> Wishlist Saya </a>
            <br>
            <br>
            <br>
            <a  href="<?php echo base_url();?>index.php/Welcome/keluar"> Keluar </a>
          </div>

        </div>
        <div class="col-md-8">
          <div class="halaman2" style="padding:10px;">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Biodata</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Daftar Alamat</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Pembayaran</a>
                      </div>
                  </nav>

                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <form class="" action="<?php echo site_url('Welcome/update_pengguna')?>" method="post">
                              <div class="rounded-lg" style="background:#e8eaf6; margin-top:20; weight:50px;  padding: 15px;heigh:50px; color:#281e5a; font-family:Karla,sans-serif; font-size:18px; contrast:12.21;">
                                <a > Berlangganan Newsletter </a>
                              </div>
                                <a style="margin-top:-100px; font-size:10px;" >Nama Lengkap</a>
                                <div class="no-border" >
                                    <input type="text" name="nama" placeholder="" value="<?php echo $user['nama']; ?>" style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                                </div>
                                    <a style="margin-top:-100px; font-size:10px;">Email</a>
                                <div class="no-border" >
                                    <input type="text" name="email" placeholder="" value="<?php echo $user['email']; ?>"style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                                </div>
                                <div class=verification"">
                                    <a href="#">Verifikasi Email Saya</a>
                                </div>
                                <br>
                                  <p>Jenis Kelamin</p>

                                      <label class="radio-inline" style="font-family:Karla,sans-serif;">
                                          <input type="radio" name="gender" checked=<?php if($user['gender'] = "Laki-Laki") { echo "true"; }?>  value="Laki=Laki">Laki-Laki
                                        </label>

                                        <label class="radio-inline">
                                          <input type="radio" name="gender" checked=<?php if($user['gender'] = "Rahasia") { echo "true"; }?>  value="Laki=Laki">Rahasia
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="gender" checked=<?php if($user['gender'] = "Perempuan") { echo "true"; }?>  value="Perempuan">Perempuan
                                        </label>
                                        <br>
                    <!-- Datepicker Tanggal Lahir -->

                                <p>Tanggal Lahir</p>
                                <input type="date" name="birthdate" value="<?php echo $user['birthdate'] ?>">
                                  <br>
                                  <br>
                                  <a style="margin-top:-100px; font-size:12px;">No.Telp</a>
                                  <div class="no-border" >
                                    <input type="text" name="telp" placeholder="" value="<?php echo $user['telp']; ?>" style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                                  </div>
                                  <br>
                  <!--  select pekerjaan-->
                                <a style="margin-top:-100px; font-size:10px;"> Profesi atau Pekerjaan</a>

                                <select name="job" class="form-control" id="sel1" value="<?php echo $options['job'] ?>">

                                    <option value="<?php echo $user['job'];?>" selected="selected"><?php echo $user['job'];?></option>
                                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                                    <option value="Pegawai Negeri">Pegawai Negeri</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Guru/Dosen">Guru/Dosen</option>
                                    <option value="Pengusaha">Pengusaha</option>
                              </select>


                <!-- Checkbox Hobi -->
                <!-- Default inline 1-->
                <br>
                            <p style="margin-top:50px; padding:2%;">Hobi</p>
                            <select name="hobi" class="form-control" id="sel1" value="<?php echo $options['hobi']; ?>">

                                <option value="<?php echo $user['hobi'];?>" selected="selected"><?php echo $user['hobi'];?></option>
                                <option value="Kecantikan">Kecantikan</option>
                                <option value="Otomotif">Memancing</option>
                                <option value="Membaca">Berkebun</option>
                                <option value="Berkebun">Olahraga</option>
                                <option value="Olahraga">melukis</option>
                          </select>

                                  <br>
              <!--chckbox kategory buku favorite  -->
                                    <p>Kategori Buku Favorite</p>
                                    <select name="favbook" class="form-control" id="sel2" value="<?php echo $options['favbook']; ?>">

                                        <option value="<?php echo $user['favbook'];?>" selected="selected"><?php echo $user['favbook']?></option>
                                        <option value="Pegawai Swasta">Buku Anak</option>
                                        <option value="Pegawai Negeri">Agama</option>
                                        <option value="Dokter">Fiksi</option>
                                        <option value="Guru/Dosen">Novel</option>
                                        <option value="Pengusaha">Horror</option>
                                  </select>

                                            <br>
              <!-- button simpan -->
                                <button type="submit" class="btn btn-pink" style="background: #e61e64; color: #FFFFFF;font-family:Karla, sans-serif; margin: 15px 0px; padding: 10px 45px; ">
                                    SIMPAN
                                  </button>
                                  <br>
                                  <a href="#">Ubah Kata Sandi</a>
              </form>
              </div>

                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="margin-top:-100px;">
aaa
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background: #281e5a;color:  #FFFFFF;font-family:Karla, sans-serif; margin-top:-1400px;margin-left:500px;">
                                Tambah Alamat
                              </button>

                           <!-- Modal -->
                                  <div class="modal fade" id="myModal" role="dialog">
                                      <div class="modal-dialog">
                                 <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title" style="">Tambah Alamat Pengiriman</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form class="" action="index.html" method="post">
                                            <p>Nama Alamat</p>
                                            <input type="text" name="alamat" placeholder="Masukkan Nama Alamat">
                                            <br>
                                            <p>Nama Penerima</p>
                                            <input type="text" name="name"placeholder="Masukkan Nama Penerima">
                                            <br>
                                            <p>No handphone</p>
                                            <input type="number" name="hp" value="+62" placeholder="Masukan No handphone">
                                            <br>
                                            <label for="sel1">Provinsi</label>
                                            <select class="form-control" id="sel1">
                                              <option>Pilih Provinsi</option>
                                              <option>Bali</option>
                                              <option>Gorontalo</option>
                                              <option>Jawa barat</option>
                                              <option>Jawa Timur</option>
                                              <option>Sumatra Selatan</option>
                                              <option>Jawa Tengah</option>
                                              <option>Kalimantan Barat</option>
                                              <option>Kalimantan Timur</option>
                                              <option>NTT</option>
                                              <option>NTB</option>
                                              <option>Aceh</option>
                                              <option>Sulawesi Selatan</option>
                                            </select>
                                            <label for="sel1">Kota/Kabupaten</label>
                                              <select class="form-control" id="sel1">
                                              <option>Pilih Kota/Kabupaten</option>
                                              <option>Bandung</option>
                                              <option>Mataram</option>
                                              <option>Pontianak</option>
                                              <option>Makassar</option>
                                              <option>Pekanbaru</option>
                                              <option>Yogyakarta</option>
                                              <option>Purwokerto</option>
                                              <option>Palembang</option>
                                              <option>Denpasar</option>
                                              </select>
                                            <label for="sel1">Kode Pos</label>
                                              <select class="form-control" id="sel1">
                                              <option>Pilih Kode Pos</option>
                                              <option>80811</option>
                                              <option>80812</option>
                                              <option>80813</option>
                                              <option>80888</option>
                                              <option>80851</option>
                                              <option>80890</option>
                                              </select>

                                              <br>
                                              <p>Alamat Lengkap</p>
                                              <input type="text" name="alm1" value="" placeholder="Masukkan Alamat Lengkap">
                                              </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Simpan Alamat</button>
                                              </div>
                                              </div>

                               </div>
                             </div>
                             <div class="rounded-lg" style="background:#e8eaf6; margin-top:20; weight:50px; color:#281e5a; font-family:Karla,sans-serif; font-size:18px;">
                              <p value="<?php echo $user['alamat']; ?>"></p>
                             </div>
                  </div>
                  <!-- </div> -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          <p>Kartu Kredit
                            <br>Data kartu Kredit Anda dijamin keamanannya oleh Visa dan MasterCard
                            <br>Anda belum menyimpan data Kartu Kredit</p>
                        </div>

          </div>
          </div>
        </div>

      </div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
