<?php

$drop_livros = getDropLivros();
$carousel = getTodosCarousel();
$css;

switch($pagina_atual){
  case "home": $css = "css/style.css"; break;
  case "autor": $css = "css/autor.css"; break;
  case "contactos": $css = "css/contactos.css"; break;
  case "imprensa": $css = "css/imprensa.css"; break;
  case "livros": $css = "css/livros.css"; break;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sebastião Alves</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  <!-- CSS Style -->
  <link rel="stylesheet" href="<?= $css; ?>">

  <!-- JS -->
  <script src="https://primeiroprojeto-miguel.000webhostapp.com/js/function.js"></script>
</head>

<body class="w-100 m-auto">
    <header class="container-fluid w-100 px-0 mx-0">
      <div class="row w-100 px-0 mx-0" id="container-sup">
        <!-- TITULO -->
        <div class="col-md-12 col-9 px-0 mx-0 titulo d-flex justify-content-center">
          <h1 class="text-center">SEBASTIÃO ALVES</h1>
        </div>
        <div class="col-3 d-md-none align-self-end">
          <button class="navbar-toggler mb-2" id="botao_navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="alterarHamburger()">
            <img src="img/menu.svg" alt="menu" id="hamburger">
          </button>
        </div>

        <!-- HR -->
        <hr class="headerhr col-11 mx-auto px-0 mx-0">

        <!-- NAVBAR -->
        <div class="col-12 px-0 mx-0">
          <nav class="navbar navbar-expand-md active">
            <div class="container-fluid px-0">
                <div class="collapse navbar-collapse" data-toggle="collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav d-flex gap-3 mx-auto">
                      <a class="nav-link <?= ($pagina_atual == "home" ? "active-nav": ""); ?>" aria-current="page" href="index.php">HOME</a>
                      <a class="nav-link <?= ($pagina_atual == "autor" ? "active-nav": ""); ?>" href="autor.php">AUTOR</a>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown nav_livros <?= ($pagina_atual == "livros" ? "active-nav": ""); ?>" href="livros.php" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="drop">
                        LIVROS
                        </a>
                        <ul class="dropdown-menu">
                          <?php foreach($drop_livros as $l): ?>
                            <li><a class="dropdown-item" href="livros.php?id=<?= $l["id"]; ?>"><?= $l["titulo"]; ?></a></li>
                          <?php endforeach; ?>
                        </ul>
                      </li>
                      <a class="nav-link <?= ($pagina_atual == "imprensa" ? "active-nav": ""); ?>" href="imprensa.php">IMPRENSA</a>
                      <a class="nav-link <?= ($pagina_atual == "contactos" ? "active-nav": ""); ?>" href="contactos.php">CONTACTOS</a>
                  </div>
                </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="row px-0 mx-0" id="carrosseis">
        <!-- CARROSSEL DESKTOP -->
        <div class="col-12 px-0 mx-0">
          <div id="carouselExampleAutoplaying" class="carousel p-0 slide d-none d-md-block" data-bs-ride="carousel">
            <div class="carousel-indicators d-flex justify-content-start gap-2">
              <?php foreach($carousel as $i => $c): ?>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? "active" : ""; ?>" aria-label="Slide 1"></button>
              <?php endforeach; ?>
            </div>
            <div class="carousel-inner">
              <?php foreach($carousel as $i => $c): ?>
                <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                  <img src="<?= $c["imagem_desktop"]; ?>" class="d-block w-100" alt="Senhora do Amor e da Guerra">
                  <div class="carousel-caption text-start d-none d-md-block">
                    <h5><?= $c["observacao"]; ?></h5>
                    <h1><?= $c["titulo"]; ?></h1>
                    <p>
                      <?= $c["texto"]; ?>
                    </p>
                    <a href="<?= $c["link_saber_mais"]; ?>" class="link_botao" target="blank"><button class="botao_saber"></button></a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- CARROSSEL MOBILE -->
          <div id="carouselExampleAutoplaying2" class="carousel p-0 slide d-block d-md-none" data-bs-ride="carousel">
            <div class="carousel-indicators d-flex justify-content-start gap-2">
              <?php foreach($carousel as $i => $c): ?>
                <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="<?= $i; ?>" class="<?= ($i == 0) ? "active" : ""; ?>" aria-label="Slide 1"></button>
              <?php endforeach; ?>
            </div>
            <div class="carousel-inner">
              <?php foreach($carousel as $i => $c): ?>
                <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                  <img src="<?= $c["imagem_mobile"]; ?>" class="d-md-none w-100" alt="Senhora do Amor e da Guerra">
                  <div class="carousel-caption text-start d-md-none">
                    <h5><?= $c["observacao"]; ?></h5>
                    <h1><?= $c["titulo"]; ?></h1>
                    <p>
                      <?= $c["texto"]; ?>
                    </p>
                    <a href="<?= $c["link_saber_mais"]; ?>" class="link_botao" target="blank"><button class="botao_saber"></button></a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </header>