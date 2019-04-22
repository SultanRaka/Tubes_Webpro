<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	 <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	 <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>
<body>
	<div class="container" style="margin-bottom :100px; padding:10px;">
		<div class="row">
			<div class="col-md-8">
				<h3 style="margin-left: 110px; font-family: Karla,sans-serif; font-size:16px; color: #281E5A;">Menampilkan <b>1 produk</b> dalam keranjang</h3><br>
				<div class="panel panel-default">
    				<div class="panel-body">
  		 				<button type="button" class="btn btn-link" style="margin-left:500px; color: #5a5a5a;font-family: Karla,sans-serif;font-size: 16px; margin-left: 8px 0px;">Hapus Beberapa</button>
  					</div>
        </div>
           <div class="container">
             <div class="row">
               <div class="col-sm-3">
                 <img src="https://cdn.gramedia.com/uploads/items/9786024526986_Sebuah-Seni-Untuk-Bersikap-Bodo-Amat__w110_hauto.jpg" alt="Sebuah Seni untuk Bersikap Bodo Amat">

               </div>
               <div class="col-md-3" >
                 <div class="title-product">
                   <p style="font-family:Karla, sans-serif; margin-left:-180px; font-size:14px;">sebuah seni untuk bersikap bodo amat (title)</p>
                 </div>
                 <div class="author" style="margin-left:-180px ;font-size:14px;">
                   <p style="font-family:Karla, sans-serif; margin-right:-180px; color:#B4b4b4;"> Mark Manson (author)</p>
                 </div>
                 <div class="product-format" style="margin-left:-180px; font-size:14px;">
                   <p style="font-family:Karla, sans-serif; margin-right:-180px; color:#28ie5a">Soft cover (format)</p>
                 </div>
                 <div class="old-price"style="margin-left:-180px ; font-size:14px;">
                   <p style="font-family:Karla, sans-serif; margin-right:-180px;"> Rp67.000 (harga)</p>
                 </div>
                 <div class="promo-price"style="margin-left:-180px; color:#e61e64 ;font-size:14px;">
                   <p style="font-family:Karla, sans-serif; margin-right:-180px; ">Rp53.000(harga)</p>
                 </div>
               </div>
							 <div class="col-md-3" style="margin-left: -200px;">
								 <form class="form-inline" action="index.html" method="post">
							   <i class="minus-button">
									 <button type="button" class="btn btn-default btn-sm">
          				<span class="glyphicon glyphicon-minus"></span>
        					</button>

								</i>
								<i class="book-jumlah" input=""> 2
								</i>

								 <i class="plus-button">
									 <button type="button" class="btn btn-default btn-sm">
           				<span class="glyphicon glyphicon-plus"></span>
         					</button>
								</i>
              </form>
							 </div>

							 <div class="col-md-3" style="margin-left:-50px; font-family:Karla,sans-serif;">
								 <p class="SubTotal">
									 			Subtotal
								 </p>
								 <p class="price-promo" style="color:#e61e64;">
									 			Rp120.000 (harga*jumlah buku)
								 </p>
								 <br>
								 <br>
								 <br>
							 	<a href="#" type="button" class="btn btn-link" style="font-family:Karla, sans-serif; color:#464646;">
												Hapus
								</a>
							 </div>

             </div>

           </div>

 		</div>
<br>
<br>
<br>



		<div class="col-md-4" id="cart-checkout" style="border: 1px solid grey; border-radius: 5px; padding: 0px 16px; font-size :14px; font-family:Karla, sans-serif;">
                <div class="checkout-area">
                    <p class="total">
                        <span class="total-quantity" style="font-family:Karla, sans-serif;">
                            Total 1 jumlah produk
                        </span>
                        <span class="total-price" style="margin-left: 150px; font-family: Karla,sans-serif; color: #e61e64">
                            Rp 53.600
                        </span>
                    </p>
                    <button type="button" class="btn btn-pink" style="background: #e61e64; color: #FFFFFF;font-family:Karla, sans-serif; margin: 15px 0px; padding: 10px 15px; ">
                        LANJUTKAN PEMBAYARAN
                    </button>

                </div>
		</div>


				</div>
			</div>
		</div>
	</div>

</body>
</html>
