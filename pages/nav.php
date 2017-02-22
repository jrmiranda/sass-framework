<style media="screen">
  html, body {
    background-color: #f0f0f0;
    height: 100%;
    //background-image: url('img/forest.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }

  .post {
    margin: 0 0px;
  }

  img {
    width: 100%;
    margin: 10px auto;
    display: block;
  }

  .box {
    margin-bottom: 10px;
    border: 1px solid rgba(0,0,0,0.1);
  }
</style>

<nav class="fixed small dark nav collapse">
  <div class="fluid container">
    <div class="nav-header">
      <div class="icon-bars change">
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
      </div>
      <div class="nav-brand">
        <i class="fa fa-rocket" style="font-size: 2em; line-height: 1.5; color: #fff;"></i>
      </div>
    </div>
    <div class="nav-body">
      <ul class="dark unstyled bordered right nav-menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Groups</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="fluid spaced container">
  <div class="row uncollapse">
    <div class="col-4-6 col-xs-full">
      <div class="box box-body">
        <h4 class="flush">Este é um exemplo de título para o post</h4>
        <div class="post">
          <img src="<?php echo $faker->imageUrl(500, 300); ?>" alt="">
        </div>
        <span class="text-small text-light push-right left">1111 curtidas</span>
        <span class="text-small text-light left">1111 comentários</span>
      </div>
      <div class="box box-body">
        <p class="lead flush">Este é um exemplo de título para o post</p>
        <div class="post">
          <img src="<?php echo $faker->imageUrl(500, 300); ?>" alt="">
        </div>
        <span class="text-small text-light push-right left">1111 curtidas</span>
        <span class="text-small text-light left">1111 comentários</span>
      </div>
      <div class="box box-body">
        <p class="lead flush">Este é um exemplo de título para o post</p>
        <div class="post">
          <img src="<?php echo $faker->imageUrl(500, 300); ?>" alt="">
        </div>
        <span class="text-small text-light push-right left">1111 curtidas</span>
        <span class="text-small text-light left">1111 comentários</span>
      </div>
      <div class="box box-body">
        <p class="lead flush">Este é um exemplo de título para o post</p>
        <div class="post">
          <img src="<?php echo $faker->imageUrl(500, 300); ?>" alt="">
        </div>
        <span class="text-small text-light push-right left">1111 curtidas</span>
        <span class="text-small text-light left">1111 comentários</span>
      </div>
    </div>
    <div class="col-2-6">
    </div>
  </div>
</div>
