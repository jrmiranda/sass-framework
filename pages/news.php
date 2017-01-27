<style>
html, body {
  background-color: #fff;
  font-family: 'Noto Serif';
}

.nav {
  background-color: #f8f8f8;
  border-color: #eee;
  font-family: sans-serif;
}

.banner {
  padding: 15px 0;
  background-color: #fff;
  text-align: center;
  margin-top: -1px;
  margin-bottom: 20px;
}

.image {
  width: 120px;
  height: 120px;
  background-color: #ddd;
  border-radius: 50%;
  padding: 50px 0;
  margin: 20px auto;
}

.date {
  margin: 10px 0;
  padding: 10px;
  border-top: 1px solid #eee;
  border-bottom: 1px solid #eee;
}

.page-title {
  display: inline;
  position: relative;
  font-size: 50px;
}

.page-title span {
  display: inline-block;
}

.page-title span:before,
.page-title span:after {
  content: '\a0';
  position: absolute;
  height: 5px;
  border-top: 1px solid #ddd;
  top: 35px;
  width: 600px;
}

.page-title span:before {
  right: 100%;
  margin-right: 25px;
}

.page-title span:after {
  left: 100%;
  margin-left: 25px;
}

.news {
  padding: 0 0px;
  margin-bottom: 10px;
}

.news strong {
  font-size: 2.4em;
  font-weight: 500;
  display: block;
  line-height: 1.2;
  margin-bottom: 10px;
}

.news-img {
  background-color: #eee;
  border-radius: 5px;
  text-align: center;
  width: 100%;
  padding: 50px 0;
  float: left;
}
</style>

<nav class="fixed nav collapse">
  <div class="fluid container">
    <div class="nav-header">
      <div class="icon-bars change">
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
      </div>
      <div class="nav-brand">
        <span class="title">Toth</span>
      </div>
    </div>
    <div class="nav-body">
      <ul class="nav-menu right">
        <li><a href="#"><i class="fa fa-user push-right"></i>Criar Conta</a></li>
        <li><a href="#"><i class="fa fa-sign-in push-right"></i>Entrar</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="banner large container">
  <h1 class="page-title"><span>Nome da Página</span></h1>
  <div class="image center text-center">
    imagem
  </div>
  <div class="date">
    Quarta-Feira, 11 de Janeiro de 2017
  </div>
</div>

<div class=" fluid container">
  <div class="news clearfix" style="margin-bottom: 40px;">
    <div class="header">
      <div class="col-full">
        <strong class="text-center"><?php echo $faker->sentence(10); ?></strong>
        <div class="news-img" style="padding: 100px 0; margin: 10px auto;">image</div>
      </div>
      <div class="col-full">
        <p class="text-justify"><?php echo $faker->sentence(40); ?></p>
      </div>
    </div>
  </div>
  <div class="col-1-2">
    <div class="news">
      <div class="header">
        <strong><?php echo $faker->sentence(8); ?></strong>
      </div>
      <div class="body">
        <div class="col-1-2">
          <div class="news-img" style="padding: 80px 0;">image</div>
        </div>
        <div class="col-1-2">
          <p class="text-small text-justify"><?php echo $faker->sentence(40); ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-1-2">
    <div class="news clearfix">
      <div class="header">
        <div class="col-1-3">
          <div class="news-img" style="padding: 30px 0;">image</div>
        </div>
        <div class="col-2-3">
          <p><?php echo $faker->sentence(7); ?></p>
        </div>
      </div>
    </div>
    <div class="news clearfix">
      <div class="header">
        <div class="col-1-3">
          <div class="news-img" style="padding: 30px 0;">image</div>
        </div>
        <div class="col-2-3">
          <p><?php echo $faker->sentence(7); ?></p>
        </div>
      </div>
    </div>
    <div class="news clearfix">
      <div class="header">
        <div class="col-1-3">
          <div class="news-img" style="padding: 30px 0;">image</div>
        </div>
        <div class="col-2-3">
          <p><?php echo $faker->sentence(7); ?></p>
        </div>
      </div>
    </div>
    <div class="news clearfix">
      <div class="header">
        <div class="col-1-3">
          <div class="news-img" style="padding: 30px 0;">image</div>
        </div>
        <div class="col-2-3">
          <p><?php echo $faker->sentence(7); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
