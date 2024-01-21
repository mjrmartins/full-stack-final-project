<?php

$pagina_atual = 1;
$elementos_por_página = 2;

$contagem = selectSQLUnico("SELECT Count(id) as total FROM imprensa");
$total = intval($contagem["total"]);
$total_paginas = ceil($total / $elementos_por_página);
$total_botoes = 2;

$form = isset($_GET["page"]);
if($form){
  $pagina_atual = intval($_GET["page"]);
  if($pagina_atual < 1){
    $pagina_atual = 1;
  }
  elseif($pagina_atual > $total_paginas){
    $pagina_atual = $total_paginas;
  }
}

$elementos_a_ignorar = ($pagina_atual-1) * $elementos_por_página;

$imprensa = selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_página OFFSET $elementos_a_ignorar");

?>


<main class="container-fluid px-0 mx-0 pb-5">
      <!-- AREA IMPRENSA -->
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca pt-4 ps-5 pb-3" id="special">
        <div class="row mx-0">
          <div class="col-12 col-lg-8 ps-lg-5 pt-4 pe-lg-5">
            <div class="sub-titulo">imprensa</div>
            <div class="t1">últimas notícias</div>
          </div>
        </div>
      </div>

      <!-- AREA INFO IMPRENSA -->      
      <?php foreach($imprensa as $i => $val): ?>
        <div class="row mx-0 <?= ($i==0 ? "linha-um" : ""); ?> mt-4 pt-3">
          <div class="col-9 mx-auto">
            <div class="row px-0 mx-0">
              <div class="col-12 mx-auto t1 titulo-imprensa pb-2 ps-0">
                <?= getTituloImprensa($val["id"]); ?>
              </div>
              <div class="col-12 mx-auto p text-uppercase mb-5 pt-2 text-end pe-0">
                <?= getDataPublicacaoImprensa($val["id"]); ?>
              </div>
              <div class="col-12 text-center px-0 mb-5">
                <img src="<?= getImagemImprensa($val["id"]); ?>" alt="noticia imprensa" class="w-100">
              </div>
            </div>
          </div>
          <div class="row mx-0 pt-1">
            <div class="col-9 mx-auto">
              <div class="row px-0 mx-0">
                <div class="col-12 mx-auto p pb-2 ps-0 mb-5">
                  <?= getTextoImprensa($val["id"]); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      
      <div class="row mx-0 mt-5 pt-2">
        <div class="col-9 mx-auto">
          <div class="row px-0 mx-0">
            <div class="col-12 d-flex justify-content-center paginacao">
              <form action="" class="paginas d-flex flex-row gap-4">

                <button name="page" value="<?= ($pagina_atual == 1 ? 1 : ($pagina_atual-1)); ?>" class="page-link me-4" id="previous"></button>

                <?php if($pagina_atual - $total_botoes > 1): ?>
                  ...
                  <?php for($x=$pagina_atual - $total_botoes; $x <= $pagina_atual; $x++): ?>
                    <button name="page" value="<?= $x-1; ?>" class="page-link fw-bolder"><?= $x-1; ?></button>
                  <?php endfor; ?>

                <?php else: ?>
                  <?php for($x=1; $x < $pagina_atual; $x++): ?>
                    <button name="page" value="<?= $x; ?>" class="page-link fw-bolder"><?= $x; ?></button>
                  <?php endfor; ?>
                <?php endif; ?>

                <button name="page" value="<?= $pagina_atual; ?>" class="page-link fw-bolder" id="activo"><?= $pagina_atual; ?></button>

                <?php if($pagina_atual + $total_botoes < $total_paginas): ?>
                  <?php for($x = $pagina_atual + 1; $x <= $pagina_atual+$total_botoes; $x++): ?>
                    <button name="page" value="<?= $x; ?>" class="page-link fw-bolder"><?= $x; ?></button>
                  <?php endfor; ?>
                  ...
                <?php else: ?>
                  <?php for($x = $pagina_atual + 1; $x <= $total_paginas; $x++): ?>
                    <button name="page" value="<?= $x; ?>" class="page-link fw-bolder"><?= $x; ?></button>
                  <?php endfor; ?>
                <?php endif; ?>

                <button name="page" value="<?= ($pagina_atual == $total_paginas ? $total_paginas : ($pagina_atual+1)); ?>" class="page-link ms-4" id="next"></button>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>