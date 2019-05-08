<head>
	<title><?= $title ?></title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/id/1/1a/Gramedia_logo.png" type="image/ico">
</head>

	<div class="fixed-top">
		<div class="miniheader-item col-md-12" style="background-color: #1c1540;">
			<div class="miniheader-item-inner">
				<a href="#">Bantuan</a>
			</div>
		</div>
		<div style="height:67px;" class="col-md-12 navcontainer">
			<div class="container">
				<div class="row" >
					<div class="container-fluid">
						<nav class="navbar navbar-expand-xl navbar-dark bg-black" >
							<a class="navbar-brand" href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>img/logo/gramed.svg" w alt="Gramediul.com"> </a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:5%;">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item" >
								<div class="dropdown" id="headerdropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-target="#navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kategori</a>
								</div>
							</li>
							<li class="nav-item">
								<form action="<?= site_url(); ?>/Welcome/search"  class="form-inline" method="post">
									<input class="form-control" type="search" name="search-bar" id="searchinput" placeholder="Cari buku" style="width:400px;">
									<button type="submit" id="searchbutton" > <span class=" glyphicon glyphicon-search" ></span></button>
								</form>
							</li>
							<li class="nav-item">
								<?php if($this->session->userdata('email')){?>
									<div class="col-sm-12" style="padding-top:40%">
											<a href="#"data-toggle="modal" data-target="#loginmenu"> <img src="<?= base_url('img/icons/user.png')  ?>" style="max-width:25px; max-height:25px; padding-bottom:7px;"> </a>
											<a style="padding:0 10px 0;"> | </a>
											<a href="<?= base_url('index.php/Welcome/keranjang');?>"> <img src="<?= base_url('img/icons/cart.png')  ?>" style="max-width:25px; max-height:25px; padding-bottom:7px;"> </a>
									</div>
								<?php } else{ ?>

											<div class="col-sm-12" style="padding-top:30%">
												<a data-toggle="modal" data-target="#logModal" href="#" style=" font-size:18px; color:#fff;"> Masuk</a>
													<a style="padding:0 10px 0;"> | </a>
												<a href="<?= base_url('index.php/Welcome/register');?>"> <img src="<?= base_url('img/icons/cart.png')  ?>" style="max-width:25px; max-height:25px; padding-bottom:7px;"> </a>
											</div>

								<?php }?>

							</li>
						</ul>
						</div>
						</nav>
					</div>
				</div>
				</div>
			</div>
				</div>

			<div class="modal fade" id="logModal" style="z-index:9999;">
         <div class="modal-dialog">
           <div class="modal-content">
             <div class="card">
               <article class="card-body">
                 <form action="<?php echo base_url(). 'index.php/welcome/login'; ?>" method="post">
                   <div class="form-group">
                     <label>Email</label>
                     <input class="form-control" placeholder="Email" type="email" name="email">
                   </div>
                   <!-- form-group// -->
                   <div class="form-group">
                     <label>Password</label>
                     <input class="form-control" placeholder="******" type="password" name="password">
                   </div> <!-- form-group// -->
                   <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                   </div> <!-- form-group// -->
                 </form>
								 <div class="">
									 	Belum mendaftar? <a href="<?= base_url('index.php/Welcome/register');?>" class="btn btn-outline-primary">Daftar</a>
								 </div>
               </article>
             </div>
           </div>
         </div>
       </div>
			 <div class="modal fade" id="loginmenu">
				 <div id="login-menu-container">
					 <div class="modal-dialog">
						 <div class="modal-content" style="max-width:300px;">
							 <div class="card" >
								 <article class="card-body">
									 <h2>Halo, <b style="color:lightblue;"> <?= $this->session->nama; ?> </b> </h2>
									 <h3><a href="<?php echo base_url();?>index.php/Welcome/akun/pesanan"> Pesanan Saya </a></h3>
									 <h3><a href="<?php echo base_url();?>index.php/Welcome/akun/akun_saya"> Akun Saya</a></h3>
									 <h3><a href="<?php echo base_url();?>index.php/Welcome/akun/wishlist"> Wishlist Saya</a></h3>
									 <h3><a  href="<?php echo base_url();?>index.php/Welcome/logout"> Keluar</a></h3>
								 </article>
							 </div>
						 </div>
					 </div>
				 </div>

			</div>
			<div class="dropdown-menu"  id="navbarDropdown" aria-labelledby="navbarDropdown" style="z-index:9999; top:90px; position:sticky; width:100%;">
	 			 <div class="inner-container">
	 				 <div class="container-fluid" style="display:flex; padding: 1% 0 1%;" >
	 					<div class="drop-container" style="border-right:1px solid black; padding-right:50px;">
	 						<div class="drop-item">
	 							<a href="#" class="drop-text"><b>BUKU</b></a>
	 						</div>
	 						<div class="drop-item">
	 							<a href="#" class="drop-text"><b>EBOOK</b></a>
	 						</div>
	 						<div class="drop-item">
	 							<a href="#" class="drop-text"><b>FASHION & AKSESORIS</b></a>
	 						</div>
	 						<div class="drop-item">
	 							<a href="#" class="drop-text"><b>MAJALAH</b></a>
	 						</div>
	 						<div class="drop-item">
	 							<a href="#" class="drop-text"> <b>OLAHRAGA</b> </a>
	 						</div>
	 						<div class="drop-item">
	 							<a href="#" class="drop-text"><b>STATIONARY, SEKOLAH & KANTOR</b></a>
	 						</div>
	 						<div class="drop-item">
	 							<a href="#" class="drop-text"><b>TEKNOLOGI</b></a>
	 						</div>
	 						<div class="drop-item" style="padding-bottom:150px;">
	 							<a href="#" class="drop-text"><b>MAINAN & HOBI</b></a>
	 						</div>
	 					</div>
	 					<div class="drop-container">

	 					</div>
	 				 </div>
	 			 </div>

	 			 </div>
<body>
