<!doctype html>
<html lang="en">
	
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<title>Gramediul</title>
    
  </head>
  <body>
	  <div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div id="karo" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo base_url('img/karo/1.jpg'); ?>" alt="First slide" width="720" height="500">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url('img/karo/2.jpg'); ?>" alt="Second slide" width="720" height="500">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo base_url('img/karo/3.jpg'); ?>" alt="Third slide" width="720" height="500">
					</div>
				</div>
				<a class="carousel-control-prev" href="#karo" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#karo" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
			</div>
		</div>
		</div>
		</br>
		<h1 class="text-center">Kategori</h1>
		</br>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-2">
				<a href="<?php echo base_url('index.php/welcome/sejarah')?>"><img src="<?php echo base_url('img/kateg/sejarah.png'); ?>" width="200" height="200"></a>
			</div>
			<div class="col-sm-2">
				<a href="<?php echo base_url('index.php/welcome/politik')?>"><img src="<?php echo base_url('img/kateg/poli.png'); ?>" width="200" height="200"></a>
			</div>
			<div class="col-sm-2">
				<a href="<?php echo base_url('index.php/welcome/teknologi')?>"><img src="<?php echo base_url('img/kateg/tekno.png'); ?>" width="200" height="200"></a>
			</div>
			<div class="col-sm-2">
				<a href="<?php echo base_url('index.php/welcome/komik')?>"><img src="<?php echo base_url('img/kateg/komik.png'); ?>" width="200" height="200"></a>
			</div>
			<div class="col-sm-2"></div>
		</div>
		</br>
		<h1 class="text-center">Buku Populer</h1>
		</br>
		<!-- buku populer carousel -->
		<div class="container">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-4">
						<a href="#"> <img src="<?php echo base_url('img/banner/popu.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
				</div>
				<div class="col-lg-4">
					<div id="karopopu" class="carousel slide" data-ride="carousel" >
						<ol class="carousel-indicators">
							<li data-target="#karopopu" data-slide-to="0" class="active"></li>
							<li data-target="#karopopu" data-slide-to="1"></li>
							<li data-target="#karopopu" data-slide-to="2"></li>
							<li data-target="#karopopu" data-slide-to="3"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active" >
								<a href="#"> <img src="<?php echo base_url('img/buku/poli/pange.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
							</div>
							<div class="carousel-item">
								<a href="#"> <img src="<?php echo base_url('img/buku/tekno/php.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
							</div>
							<div class="carousel-item">
								<a href="#"> <img src="<?php echo base_url('img/buku/sejarah/hitler.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
							</div>
							<div class="carousel-item">
								<a href="#"> <img src="<?php echo base_url('img/buku/komik/aot.jpg'); ?>" width="315" height="500" class="d-block img-fluid"> </a>
							</div>
						</div>
						 <!-- Left and right controls -->
						<a class="left carousel-control" href="#karopopu" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#karopopu" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		</br>
		
		<!-- contoh panggil data -->
		<button onclick = alert("serah lu")>Try it</button>
		
		
		
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
