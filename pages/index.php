<nav class="fixed nav collapse">
  <div class="fluid container">
    <div class="nav-header">
      <div class="icon-bars change">
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
      </div>
      <div class="nav-brand">
        <a href="#"><i class="fa fa-rocket" style="font-size: 2em; line-height: 1.5;"></i></a>
      </div>
    </div>
    <div class="nav-body">
      <ul class="nav-menu bordered right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Groups</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="fluid huge container">
  <div class="col-3">
    <div class="card push-bottom">
      <div class="card-header">
        <img src="<?php echo $faker->imageUrl(500, 300); ?>">
      </div>
      <div class="card-body">
        <h1 class="card-title flush"><?php echo $faker->sentence(2); ?></h1>
      </div>
    </div>
    <div class="box">
      <ul class="bordered small menu">
        <li><a href="#">Basics</a></li>
        <li class="active"><a href="#">Password</a></li>
        <li><a href="#">Security</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Followers</a></li>
      </ul>
    </div>
  </div>
  <div class="col-7">
    <div class="box push-bottom">
      <div class="box-header">
        <span class="title">Novo Post</span>
      </div>
      <div class="box-body">
        <form class="" action="index.html" method="post">
          <input type="text" name="" placeholder="Escreva algo...">
        </form>
      </div>
    </div>
    <div class="box box-body text-justify">
      <div class="green text-small alert push-bottom">
        <div class="icon">
          <i class="fa fa-check fa-2x"></i>
        </div>
        <div class="message">
          <strong>Success!</strong>
          <p>This is a message.</p>
        </div>
      </div>
      <?php content('h4-p-p'); ?>
      <img src="<?php echo $faker->imageUrl(500, 300); ?>">
    </div>
  </div>
  <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title"><?php echo $faker->sentence(3); ?></h1>
        <p class="card-text"><?php echo $faker->sentence(15); ?></p>
        <button class="blue button push-top">Algum Botão</button>
      </div>
    </div>
  </div>
</div>
