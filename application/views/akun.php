<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>akun saya</title>
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
    <div class="container" style="margin-top:200px; padding:10;">
      <div class="row">
        <div class="col-md-4" style=" font-family:Karla,sans-serif;color:#281E5A;">
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

                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent" style="margin-top:20px;">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="rounded-lg" style="background:#e8eaf6; margin-top:20; weight:50px;  padding: 15px;heigh:50px; color:#281e5a; font-family:Karla,sans-serif; font-size:18px; contrast:12.21;">
                        <a > Berlangganan Newsletter </a>
                      </div>
                      <a style="margin-top:-100px; font-size:10px;">Nama Lengkap</a>
                      <div class="no-border" >
                        <input type="text" name="name" placeholder="" style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                      </div>
                      <a style="margin-top:-100px; font-size:10px;">Email</a>
                      <div class="no-border" >
                        <input type="text" name="email" placeholder="" style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                      </div>
                      <div class=verification"">
                        <a href="#">Verifikasi Email Saya</a>
                      </div>
                      <br>
                    <p>Jenis Kelamin</p>
                        <form>
                          <label class="radio-inline" style="font-family:Karla,sans-serif;">
                            <input type="radio" name="optradio" checked>Laki-Laki
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio">Perempuan
                          </label>
                          <label class="radio-inline">
                            <input type="radio" name="optradio">Rahasia
                          </label>
                    </form>
                    <br>
                    <!-- Datepicker Tanggal Lahir -->
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                          <div class="input-group date" style="margin-left:200px;">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                          <input placeholder="" type="text" class="form-control datepicker" style="margin-left:100px;" name="tgl_awal">
                         </div>
                    </div>
                  <a style="margin-top:-100px; font-size:10px;">No.Telp</a>
                  <div class="no-border" >
                    <input type="text" name="telp" placeholder="" style="font:Karla,sans-serif;font-size:14px;width:400px; height:20px; ">
                  </div>

                  <!--  select pekerjaan-->
                <a style="margin-top:-100px; font-size:10px;"> Profesi atau Pekerjaan</a>
                        <label for="sel1"></label>
                        <select class="form-control" id="sel1">
                        <option></option>
                        <option>Pegawai Swasta</option>
                        <option>Pegawai Negeri</option>
                        <option>Dokter</option>
                        <option>Guru/Dosen</option>
                        <option>Pengusaha</option>
                        </select>


                <!-- Checkbox Hobi -->
                <!-- Default inline 1-->
              <p style="margin-top:50px; padding:2%;">Hobi</p>
                <div class="checkbox" style="padding:2%;">
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline1">
                        <label class="custom-control-label" for="defaultInline1">Kecantikan</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline2">
                        <label class="custom-control-label" for="defaultInline2">Otomotif</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline3">
                        <label class="custom-control-label" for="defaultInline3">Membaca</label>
                      </div>
                </div>
                <div class="checkbox" style="padding:2%;">
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input type="checkbox" class="custom-control-input" id="defaultInline4">
                          <label class="custom-control-label" for="defaultInline4">Berkebun</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input type="checkbox" class="custom-control-input" id="defaultInline5">
                          <label class="custom-control-label" for="defaultInline5">Seni</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                          <input type="checkbox" class="custom-control-input" id="defaultInline6">
                          <label class="custom-control-label" for="defaultInline6">Teknologi</label>
                        </div>
                </div>
                <div class="checkbox" style="padding :2%;">
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline7">
                        <label class="custom-control-label" for="defaultInline7">Wisata</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline8">
                        <label class="custom-control-label" for="defaultInline8">Keterampilan</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline9">
                        <label class="custom-control-label" for="defaultInline9">Koleksi</label>
                      </div>
                </div>
                <div class="Checkbox" style="padding:2%;">
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline10">
                        <label class="custom-control-label" for="defaultInline10">Belanja</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline11">
                        <label class="custom-control-label" for="defaultInline11">Olahraga</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInline12">
                        <label class="custom-control-label" for="defaultInline12">Fashion</label>
                      </div>
                </div>

              <br>
              <!--chckbox kategory buku favorite  -->
              <p>Kategori Buku Favorite</p>
              <div class="checkbox" style="padding:2%;">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlinea">
                      <label class="custom-control-label" for="defaultInlinea">Agama</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlineb">
                      <label class="custom-control-label" for="defaultInlineb">Buku Anak</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlinec">
                      <label class="custom-control-label" for="defaultInlinec">Fiksi</label>
                    </div>
              </div>
              <div class="checkbox" style="padding:2%;">
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInlined">
                        <label class="custom-control-label" for="defaultInlined">Kamus</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInlinee">
                        <label class="custom-control-label" for="defaultInlinee">Novel</label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="defaultInlinef">
                        <label class="custom-control-label" for="defaultInlinef">Travel</label>
                      </div>
              </div>
              <div class="checkbox" style="padding :2%;">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlineg">
                      <label class="custom-control-label" for="defaultInlineg">Sains</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlineh">
                      <label class="custom-control-label" for="defaultInlineh">Komik</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlinei">
                      <label class="custom-control-label" for="defaultInlinei">Horor</label>
                    </div>
              </div>
              <div class="Checkbox" style="padding:2%;">
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlinej">
                      <label class="custom-control-label" for="defaultInlinej">Biografi</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlinek">
                      <label class="custom-control-label" for="defaultInlinek">Hukum</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                      <input type="checkbox" class="custom-control-input" id="defaultInlinel">
                      <label class="custom-control-label" for="defaultInlinel">Kuliner</label>
                    </div>
              </div>
              <br>
              <!-- button simpan -->
              <button type="button" class="btn btn-pink" style="background: #e61e64; color: #FFFFFF;font-family:Karla, sans-serif; margin: 15px 0px; padding: 10px 45px; ">
                  SIMPAN
              </button>
              <br>
              <a href="#">Ubah Kata Sandi</a>

              </div>
              <!-- alamat -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="padding-top:-100px;">
                      <!-- <button type="button" class="btn btn-pink" style="background: #281e5a;color: #FFFFFF;font-family:Karla, sans-serif; margin-left:600px;">
                          Tambah Alamat
                      </button>
                       -->
                       <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background: #281e5a;color: #FFFFFF;font-family:Karla, sans-serif; margin-left:600px;">
                       Tambah Alamat</button>

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
                                              </select>
                                      <label for="sel1">Kode Pos</label>
                                              <select class="form-control" id="sel1">
                                              <option>Pilih Kode Pos</option>
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
                               <p>Pesona Bali</p>
                               <p>Jln Raya Bojongsoang</p>
                             </div>
                  </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          <p>Kartu Kredit
                            <br>Data kartu Kredit Anda dijamin keamanannya oleh Visa dan MasterCard
                            <br>Anda belum menyimpan data Kartu Kredit</p>
                        </div>
          </div>

          </div>

        </div>

      </div>
    </div>

  </body>
<html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
