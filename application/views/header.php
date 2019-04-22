
	<div class="fixed-top">
		<div class="miniheader-item col-md-12" style="background-color: #1c1540;">
			<div class="miniheader-item-inner">
				<a href="#">Bantuan</a>
			</div>
		</div>
		    <div class="col-md-12 navcontainer">
				<div class="container">
				<div class="row" >
					<div class="col-sm-12" style="height:7%" >
						<nav class="navbar navbar-expand-xl navbar-dark bg-black" >
							<a class="navbar-brand" href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>img/logo/gramed.svg" w alt="Gramediul.com"> </a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:5%;">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item" >
								<div class="dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-target="#navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kategori</a>
								</div>
							</li>
							<li class="nav-item">
								<form class="form-inline">
									<input class="form-control" type="search" placeholder="Cari buku" style="width:400px;">
									<button class="btn" type="submit" > <span class=" glyphicon glyphicon-search" ></span></button>
								</form>
							</li>
							<li class="nav-item">
								<!-- sudah login -->
								<?php if($this->session->userdata('email')){?>
									<div class="col-sm-12" style="padding-top:30%">
												<a  href="<?php echo base_url();?>index.php/Welcome/logout"> Logout </a>
													<a> | </a>
												<a href="<?php echo base_url();?>index.php/Welcome/keranjang"> Keranjang </a>
											</div>

								<!--belum login-->

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
			<div class="modal fade" id="logModal">
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
			 <div class="dropdown-menu"  id="navbarDropdown" aria-labelledby="navbarDropdown" style="z-index:9999; top:90px; position:sticky; width:100%;">
				 <div class="inner-container">
					 <div class="container-fluid">
					 	<div class="drop-container">
					 		<div class="drop-item">
					 			<a href="#">BUKU</a>
					 		</div>
							<div class="drop-item">
								<a href="#">EBOOK</a>
							</div>
							<div class="drop-item">
								<a href="#">FASHION & AKSESORIS</a>
							</div>
							<div class="drop-item">
								<a href="#">MAJALAH</a>
							</div>
							<div class="drop-item">
								<a href="#">OLAHRAGA</a>
							</div>
							<div class="drop-item">
								<a href="#">STATIONARY, SEKOLAH & KANTOR</a>
							</div>
							<div class="drop-item">
								<a href="#">TEKNOLOGI</a>
							</div>
							<div class="drop-item">
								<a href="#">MAINAN & HOBI</a>
							</div>
					 	</div>
						<div class="drop-container">

						</div>
					 </div>
				 </div>
			 </div>

			 <body>
