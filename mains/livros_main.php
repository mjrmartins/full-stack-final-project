<?php

$form = isset($_GET["id"]);

if($form){
  $id = $_GET["id"];
}

?>

<main class="container-fluid px-0 mx-0 pb-5">
      <!-- AREA LIVRO -->
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca pt-4 ps-5 pb-3" id="special">
        <div class="row mx-0">
          <div class="col-12 col-lg-8 ps-lg-5 pt-4 pe-lg-5">
            <div class="sub-titulo">livros</div>
            <div class="t1"><?= getTituloLivro($id); ?></div>
          </div>
        </div>
      </div>

      <!-- AREA INFO LIVRO -->
      <div class="row mx-0">
        <div class="col-9 mx-auto mt-3">
          <div class="row px-0 mx-0">
            <div class="col-12 col-md-6 text-center">
              <img src="<?= getImagemLivro($id); ?>" alt="livro3" class="foto-livro w-100">
            </div>
            <div class="col-12 col-md-6 mx-auto mt-4 p">
              <?= getTextoLivro($id); ?>
            </div>
          </div>
          <div class="row px-0 mx-0 mt-4">
            <div class="col-12 p">
              <?= getTextoAbreviadoLivro($id); ?>
            </div>
            <div class="col-12 col-md-6 p mt-4">
              <?= getEdicaoLivros($id); ?>
            </div>
            <div class="col-md-6 d-none mt-4 d-md-flex align-items-end justify-content-end">
              <div class="text-center pe-4">
                <a href="#" class="link_botao"><button class="botao_voltar" onclick="voltar()"></button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>