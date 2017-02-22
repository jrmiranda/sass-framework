<div class="fluid container">
  <div class="row uncollapse">
    <div class="">

      <button class="blue button" data-open="modal" data-target="#modal1">Abrir Modal 1</button>
      <button class="blue button" data-open="modal" data-target="#modal2">Abrir Modal 2</button>
      <button class="blue button" data-open="modal" data-target="#modal3">Abrir Modal 3</button>
      <button class="blue button" data-open="modal" data-target="#modal4">Abrir Modal 4</button>
      <button class="blue button" data-open="modal" data-target="#modal5">Abrir Modal 5</button>

      <div class="tiny modal" id="modal1">
        <div class="modal-header">
          <span class="modal-title">Título da Janela</span>
          <button type="button" class="close" data-close="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php echo $faker->sentence(10); ?>
        </div>
        <div class="modal-footer text-right">
          <button type="button" class=" button" data-close="modal">Fechar</button>
          <button type="button" class=" blue button">Salvar</button>
        </div>
      </div>

      <div class="small modal" id="modal2">
        <div class="modal-header">
          <span class="modal-title">Título da Janela</span>
          <button type="button" class="close" data-close="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php echo $faker->sentence(10); ?>
        </div>
        <div class="modal-footer text-right">
          <button type="button" class=" button" data-close="modal">Fechar</button>
          <button type="button" class=" blue button">Salvar</button>
        </div>
      </div>

      <div class="large modal" id="modal3">
        <div class="modal-header">
          <span class="modal-title">Título da Janela</span>
          <button type="button" class="close" data-close="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php echo $faker->sentence(10); ?>
        </div>
        <div class="modal-footer text-right">
          <button type="button" class=" button" data-close="modal">Fechar</button>
          <button type="button" class=" blue button">Salvar</button>
        </div>
      </div>

      <div class="huge modal" id="modal4">
        <div class="modal-header">
          <span class="modal-title">Título da Janela</span>
          <button type="button" class="close" data-close="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php echo $faker->sentence(10); ?>
        </div>
        <div class="modal-footer text-right">
          <button type="button" class=" button" data-close="modal">Fechar</button>
          <button type="button" class=" blue button">Salvar</button>
        </div>
      </div>

      <div class="modal" id="modal5">
        <div class="modal-header">
          <span class="modal-title">Título da Janela</span>
          <button type="button" class="close" data-close="modal">&times;</button>
        </div>
        <div class="modal-body">
          <?php echo $faker->sentence(10); ?>
        </div>
        <div class="modal-footer text-right">
          <button type="button" class=" button" data-close="modal">Fechar</button>
          <button type="button" class=" blue button">Salvar</button>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="backdrop"></div>
