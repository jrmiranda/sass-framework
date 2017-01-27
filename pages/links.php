<style media="screen">
  html, body {
    background-color: #201630;
  }
</style>

<nav class="fixed nav collapse" style="background-color: #432e64; border: 0; height: 45px;">

</nav>

<div class="fluid large container push-top">
  <?php for($i = 0; $i < 15; $i++): ?>
    <div class="col-xs-full col-sm-1-2 col-1-3" style="padding: 10px;">
      <div class="card">
        <div class="card-img">
          <img src="<?php echo $faker->imageUrl(500); ?>">
          <span class="category">Categoria</span>
        </div>
        <div class="card-body">
          <p class="card-title"><?php echo $faker->sentence(8); ?></p>
          <small>(site.com)</small>
        </div>
        <div class="card-footer">
          <span class="text-light text-tiny push-right"><i class="fa fa-mouse-pointer"></i>1234</span>
          <span class="text-light text-tiny"><i class="fa fa-comments"></i>1234</span>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>
