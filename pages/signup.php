<style>
  html, body {
    height: 100%;
    background-image: url('img/newspaper.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  input {
    margin: 0 !important;
  }

  small {
    margin-left: 5px;
    margin-top: 3px;
  }

  .input-group {
    margin-bottom: 10px;
  }

  .box {
    background-color: rgba(255, 255, 255, 0.85);
    padding: 20px;
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
        <span class="title" style="font-family: Noto Serif; font-weight: 600;">Logo</span>
      </div>
    </div>
    <div class="nav-body">
      <ul class="nav-menu right">
        <li><a href="#">Nova Conta</a></li>
        <li><a href="#">Entrar</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="fluid container" style="width: 450px; margin-top: 200px; font-family: Roboto">
  <div class="box box-body">
    <h1 class="text-center">Nova Conta</h1>
    <form class="large" action="index.html" method="post">
      <div class="input-group">
        <input type="text" name="" placeholder="Nome de Usuário">
      </div>
      <div class="input-group">
        <input type="text" name="" placeholder="E-mail">
      </div>
      <div class="input-group">
        <input type="password" name="" placeholder="Senha">
      </div>
      <div class="input-group">
        <input type="password" name="" placeholder="Confirme sua Senha">
      </div>
      <div class="input-group">
        <input type="submit" class="large green full button" value="Cadastrar">
      </div>
    </form>
  </div>
</div>
