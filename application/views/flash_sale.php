<div class="inner-container" style="padding-top:10%;">
  <div class="container-fluid">
    <img src="https://cdn.gramedia.com/uploads/marketing/flash_sale_SENIN_PRODUKTIF_Storefront_2_.jpg" style="width:100%; ">
  </div>
  <div style="padding: 20px 0 20px;" align="center">
    <h2>Flash Sale</h2>
  </div>
  <?php $i=1; $j=1; foreach($sale_item as $item) : if($i % 6 == 1){?>
  <div class="container-fluid" style="display:flex;">
  <?php } ?>
    <div class="carousel-cell">
      <div class="card" style="width:152px;">
          <img class="card-img-top" src="<?= $item->link_image ?>" style="height:228px;">
          <div class="card-body">
            <h4 class="card-title"><?= $item->nama ?></h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
    </div>
    <?php if($j % 6 == 0){?></div><?php } $i++; $j++;?>
    <?php endforeach ?>
  </div>
