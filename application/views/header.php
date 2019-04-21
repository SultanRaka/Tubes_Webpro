<style media="screen">
	.miniheader-item-inner{
		float: right;
	}
	.universalcontainer{
		padding-top: 10%;
	}
	.navbar > .navbar-brand > img{
		width: 185px;
	}
	.navbar{
		height: 1%;
	}
	.fixed-top{
		margin-bottom: 10%;
	}
	.miniheader-item{
		height: 24px;
		font-size: 14px;
	}
	.dropdown{
		font-size: 19px;
		top: 0;
		padding-top: 4%;
	}
	.nav-item > form>button{
		border: 0;
		background: none;
		padding: 2px 5px;
		position: relative;
		left: -28px;
		margin-bottom: 0;
		border-radius: 3px;
	}
	#promocarousel {
		width: 75%;
		height: 336px;
	}
	#promocarousel .carousel-item{
		overflow: hidden;
	}
	#promocarousel .carousel-item img{
				height: 336px;
		    border-radius: 4px;
		    background-color: #efefef;
				object-fit: cover;
	}
	#smallcarousel {
		padding-left: 8px;
		display: flex;
		    flex-direction: column;
	}
	.nav-item > form{
		padding-top: 7%;
	}
	.navcontainer{
		background-color: #281e5a;
		height: 65px;
		box-shadow: 0 0 0 0 rgba(0,0,0,.12), 0 4px 4px 0 rgba(0,0,0,.24);
	}
	#smallcarousel .square{
		width: 336px;
    height: 164px;
    border-radius: 4px;
    background-color: #fff;
	}
	#homepromos{
		display: flex;
	}
	#smallcarousel .square a > img{
		width: 100%;
		height:100%;
		object-fit: cover;
	}
	.paddinguniversal{
		padding:auto;
	}
	.inner-container{

		max-width: 1024px;
		margin:auto;
		box-sizing: border-box;
	}
	#homemenus  img {
  	width: 100px;
  	height: 100px;
	}
	#homemenus a{
  	display: inline-block;
		font-family: Karla,sans-serif;
    font-size: 14px;
    font-weight: 700;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.29;
    letter-spacing: normal;
    text-align: center;
    color: rgba(40,30,90,.86);
    padding-top: 16px;
  	padding-right: 20px;
	}
	#homemenus a > p{
		margin-bottom: 5px;
		word-wrap: break-word;
	}
	#homemenus{
		position: relative;
		margin-top: 10px;
		display: flex;
		justify-content: space-around;
		flex-wrap: wrap;
		width: 100%;
	}

	.main-carousel{
	margin: auto;
	height: 432px;
}
	.carousel-cell {
  	width: 20%;
  	margin-right: 10px;
  	border-radius: 5px;
	}
	.carousel-cell:before {
  	display: block;
  	text-align: center;
  	font-size: 80px;
	}
	.card-img-top{
  	width: 152px;
  	height: 228px;
	}
	.flash-sale-container{
		background: url(https://www.gramedia.com/flash-sale-banner-ii.png);
		background-size: cover;
		padding-top: 20px;
		padding-bottom: 450px;
	}
	.flickity-page-dots {
		display: none;
	}
	.footercontainer{
		background: #f0f0f0;
		margin-top: 10px;
	}
</style>

<head>

</head>
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
						<nav class="navbar navbar-expand-xl navbar-dark bg-black " >
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
								<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
								<ul class="dropdown-menu form-wrapper">
									<li>
										<form action="/examples/actions/confirmation.php" method="post">
											<p class="hint-text">Sign in with your social media account</p>
											<div class="form-group social-btn clearfix">
												<a href="#" class="btn btn-primary pull-left"><i class="fa fa-facebook"></i> Facebook</a>
												<a href="#" class="btn btn-info pull-right"><i class="fa fa-twitter"></i> Twitter</a>
											</div>
											<div class="or-seperator"><b>or</b></div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Username" required="required">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Password" required="required">
											</div>
											<input type="submit" class="btn btn-primary btn-block" value="Login">
											<div class="form-footer">
												<a href="#">Forgot Your password?</a>
											</div>
										</form>
									</li>
								</ul>
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
												<a href="<?php echo base_url();?>index.php/Welcome/logout"> Logout </a>
													<a> | </a>
												<a href="<?php echo base_url();?>index.php/Welcome/keranjang"> Keranjang </a>
											</div>

								<!--belum login-->

								<?php } else{ ?>

											<div class="col-sm-12" style="padding-top:30%">
												<a href="<?php echo base_url();?>index.php/Welcome/logon"> Masuk</a>
													<a> | </a>
												<a href="<?php echo base_url();?>index.php/Welcome/register"> Register </a>
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
