
	<div class="fixed-top" >
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
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="navbardropdown" aria-haspopup="true" aria-expanded="false"> Kategori</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/sejarah')?>">Sejarah</a>
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/politik')?>">Politik</a>
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/terknologi')?>">Teknologi</a>
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/komik')?>">Komik</a>
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
												<a data-toggle="modal" data-target="#logModal" href="#"> Masuk</a>
													<a> | </a>
												<a href="<?= base_url('index.php/Welcome/register');?>"> Register </a>
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
