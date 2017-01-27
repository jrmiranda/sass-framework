<style media="screen">
html, body {
  background-color: #fcfcfc;
}

.box {
  border: 0;
  box-shadow: none;
}

[class*='col-'] {

}

.test1 {
  background: #978;
  padding: 30px;
  border-radius: 10px;
}

.code {
  display: block;
  padding: 10px;
  background-color: #f5f5f5;
  border: 1px solid #e5e5e5;
  border-radius: 4px;
  font-family: monospace;
  margin-bottom: 20px;
}

.example {
  display: block;
  padding: 10px;
  background-color: #fafafa;
  border: 1px solid #e5e5e5;
  border-radius: 4px;
}
</style>

<div class="fluid large container">
  <div class="row uncollapse">
    <div class="col-1-4">
      <div class="soft-2x-sides">
        <ul class="small menu">
          <li><a href="#">Introdução</a></li>
          <li><a href="#">Grid</a></li>
          <li><a href="#">Containers</a></li>
          <li><a href="#">Tipografia</a></li>
          <li><a href="#">Responsivo</a></li>
          <hr>
          <li><a href="#">Boxes</a></li>
          <li><a href="#">Botões</a></li>
          <li><a href="#">Formulários</a></li>
          <li><a href="#">Menus</a></li>
          <li><a href="#">Navs</a></li>
        </ul>
      </div>
    </div>
    <div class="col-3-4">
      <div class="">
        <h1>Tipografia</h1>
        <h4 class="subheader">A tipografia no framework é feita para deixar sua vida mais fácil.</h4>
        <hr>

        <h2>Cabeçalhos</h2>
        <p>Cabeçalhos neste framework são baseados em sequencias numericas.</p>
        <div class="code">
          h1. This is a very large header.<br>
          h2. This is a large header.<br>
          h3. This is a medium header.<br>
          h4. This is a moderate header.<br>
          h5. This is a small header.<br>
          h6. This is a tiny header.<br>
        </div>
        <div class="example">
          <h1>h1. This is a very large header.</h1>
          <h2>h2. This is a large header.</h2>
          <h3>h3. This is a medium header.</h3>
          <h4>h4. This is a moderate header.</h4>
          <h5>h5. This is a small header.</h5>
          <h6>h6. This is a tiny header.</h6>
        </div>
        <hr>

        <h2>Parágrafos</h2>
        <p>A tipografia no framework é feita para deixar sua vida mais fácil.</p>
      </div>
    </div>
  </div>
</div>

<div class="hide sm-down-fluid huge container">
  <div class="row uncollapse">
    <div class="col-1-3 col-xs-full col-sm-1-2">
      <div class="test1"></div>
    </div>
    <div class="col-1-3 col-xs-full col-sm-1-2">
      <div class="test1"></div>
    </div>
    <div class="col-1-3 col-xs-full col-sm-full">
      <div class="test1"></div>
    </div>
    <div class="col-1-2 col-xs-full col-sm-1-2">
      <div class="test1"></div>
    </div>
    <div class="col-1-2 col-xs-full col-sm-1-2">
      <div class="test1"></div>
    </div>
    <div class="col-full col-xs-full col-sm-full">
      <div class="test1"></div>
    </div>
  </div>
</div>

<div class="hide fluid large container">
  <div class="row uncollapse">
    <div class="col-1-3">
      <div class="box box-body">
        teste
      </div>
      <div class="box box-body">
        teste
      </div>
    </div>
    <div class="col-2-3">
      <div class="box box-body">
        teste
      </div>
      <div class="box box-body">
        teste
      </div>
    </div>
  </div>
</div>
