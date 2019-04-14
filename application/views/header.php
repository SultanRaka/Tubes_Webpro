<head >
	<link rel="stylesheet" href=" <?php echo base_url()?>/assets/css/style.css">
	<div class="fixed-top">
		<div class="p-3" style="background-color: #1c1540;">
				<!-- sudah login -->
				<?php if($this->session->userdata('email')){?>
					<div class="container" id="log">
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-5">
								<p class="text-light">Selamat datang, <?php echo $this->session->userdata('nama') ?></p>
							</div>
							<div class="col-sm-3">
								<a href="<?php echo base_url();?>index.php/Welcome/logout"> Logout </a>
									<a> | </a>
								<a href="<?php echo base_url();?>index.php/Welcome/keranjang"> Keranjang </a>
							</div>
							<div class="col-sm-2"></div>
						</div>
					</div>

				<!--belum login-->

				<?php } else{ ?>
					<div class="container" id="log">
						<div class="row">
							<div class="col-sm-7"></div>
							<div class="col-sm-3">
								<a href="<?php echo base_url();?>index.php/Welcome/logon"> Login </a>
									<a> | </a>
								<a href="<?php echo base_url();?>index.php/Welcome/register"> Register </a>
							</div>
							<div class="col-sm-2"></div>
						</div>
					</div>
				<?php }?>


		</div>
		    <div class="p-2 mb-2 navcontainer">
				<div class="container">
				<div class="row" >
					<div class="col-sm-2"></div>
					<div class="col-sm-8" style="height:7%" >
						<nav class="navbar navbar-expand-xl navbar-dark bg-black " >
							<a class="navbar-brand" href="<?php echo base_url();?>"> <img src="<?php echo base_url();?>img/logo/gramed.svg" w alt="Gramediul.com"> </a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kategori</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/sejarah')?>">Sejarah</a>
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/politik')?>">Politik</a>
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/terknologi')?>">Teknologi</a>
									<a class="dropdown-item" href="<?php echo base_url('index.php/welcome/komik')?>">Komik</a>
								</div>
							</li>
							<li class="nav-item">
								<form class="form-inline my-2 my-lg-0">
									<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
								</form>
							</li>
						</ul>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
				</div>
				</div>
				</nav>
	</div>


</head>
