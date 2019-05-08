<div class="inner-container" style="padding-top:10%;">
  <div class="container-fluid" style="display:flex;">
    <div style="margin:auto; display:flex;">
      <?php foreach($promo_item->result() as $item){?>
          <div class="" style="padding:0 10px 0;">
            <div class="card" style="width:318px; ">
              <img class="" src="<?= $item->link_image; ?>"  style=" width:318px; height:130px; object-fit:cover;">
              <div class="card-body">
            <h4><?= $item->title; ?></h4>
            <div style="padding-top:40px;">
              <p>Periode</p>
              <p><?= $item->periode; ?></p>
            </div>
            <div align="center">
              <a href="#" class="btn btn-primary" style=" font-size: 17px; padding:10px 100px 10px;">Lihat Promo</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
