<main class="container-fluid px-0 mx-0 pb-5">
      <!-- AREA AUTOR -->
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca pt-4 ps-5 pb-3" id="special">
        <div class="row mx-0">
          <div class="col-12 col-lg-8 ps-lg-5 pt-4 pe-lg-5">
            <div class="sub-titulo">autor</div>
            <div class="t1">sobre mim</div>
          </div>
        </div>
      </div>

      <!-- AREA INFO AUTOR -->
      <div class="row mx-0">
        <div class="col-10 mx-auto mt-3">
          <div class="col-12 d-flex justify-content-center">
            <img src="<?= getImagemAutor() ?>" alt="foto autor" class="foto-autor w-100">
          </div>

          <!-- div desktop -->
          <div class="row d-none d-md-block">
            <div class="col-12 mx-auto mt-4 texto-ultimos">
              <?= getTexto() ?>
            </div>
            <div class="col-12 col-md-11 text-center text-lg-start mt-3 mt-md-5 pe-4">
              <a href="#" class="link_botao"><button class="botao_voltar" onclick="voltar()"></button></a>
            </div>
          </div>

          <!-- div mobile -->
          <div class="row d-block d-md-none">
            <div class="col-12 mx-auto mt-4 texto-ultimos" id="div-desktop">
              <?= getTextoAbreviado() ?>
            </div>
            <div class="col-12 d-none mx-auto mt-4 texto-ultimos" id="div-mobile">
              <?= getTexto() ?>
            </div>
            <div class="col-12 col-md-11 text-center d-md-none mt-5 pe-4" id="div-botao">
              <button class="botao_ver_mais" onclick="verMais()"></button>
            </div>
            <div class="col-12 col-md-11 text-center text-lg-start mt-3 mt-md-5 pe-4">
              <button class="botao_voltar" onclick="voltar()"></button>
            </div>
          </div>
        </div>
      </div>
    </main>