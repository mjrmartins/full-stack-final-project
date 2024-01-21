<?php

$destaques = getTodosDestaques();

?>

<main class="container-fluid px-0 mx-0 pb-5">
      <!-- AREA BEM VINDO -->
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca p-5">
        <div class="row">
          <div class="col-12 col-lg-4 p-lg-3 ps-lg-4 d-flex">
            <img src="<?= getImagemHome(); ?>" alt="autor" class="w-100 mx-auto">
          </div>
          <div class="col-12 col-lg-8 ps-lg-5 pt-4 pe-lg-5">
            <div class="t1">bem-vindo ao meu website</div>
            <div class="p mt-4 pe-lg-4 texto-autor">
              <?= getTextoAbreviado() ?>
            </div>
            <div class="text-center text-lg-end mt-5 pe-4">
              <a href="autor.php" class="link_botao"><button class="botao_saber"></button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- AREA ULTIMOS LIVROS -->
      <div class="row mx-0">
        <div class="col-10 mx-auto mt-4 mb-4">
          <div class="t1">últimos livros</div>
            <div class="p mt-4 texto-ultimos">
              <?= getTextoUltimos() ?>
            </div>
        </div>
      </div>
      
      <!-- AREA CARDS -->
      <div class="row mx-0">
        <div class="col-10 mx-auto d-flex flex-row flex-wrap justify-content-center gap-4 mt-5 px-0">

          <?php foreach($destaques as $d): ?>
            <div class="card mx-auto px-0 col-10 col-md-3">
              <img src="<?= getImagemLivro($d["id_livro"]); ?>" class="card-img-top w-100 px-0 w-100" alt="livro1">
              <div class="card-body px-0">
                <h5 class="card-title t1 text-start"><?= getTituloLivro($d["id_livro"]); ?></h5>
                <h6 class="card-sub"><?= $d["observacao"]; ?></h6>
                <p class="card-text p text-start"><?= getTextoAbreviadoLivro($d["id_livro"]); ?></p>
                <div class="text-end mt-5 pe-4">
                  <form action="livros.php">
                    <button class="botao_saber" name="id" value="<?= $d["id_livro"]; ?>"></button></a>
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </main>