<div class="fluid large container">
  <?php for($i = 0; $i < 3; $i++): ?>
    <div class="col-xs-full col-sm-1-2 col-1-3" style="padding: 10px;">
      <div class="card">
        <div class="card-header">
          <img src="<?php echo $faker->imageUrl(500, 300); ?>">
        </div>
        <div class="card-body">
          <h1 class="card-title"><?php echo $faker->sentence(3); ?></h1>
          <p class="card-text"><?php echo $faker->sentence(15); ?></p>
          <button class="blue button push-top">Algum Botão</button>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>
