<main class="container-fluid px-0 mx-0 pb-5">
      <!-- AREA CONTACTOS -->
      <div class="col-12 col-lg-11 offset-lg-1 bg-white caixa-branca pt-4 ps-5 pb-3" id="special">
        <div class="row mx-0">
          <div class="col-12 col-lg-8 ps-lg-5 pt-4 pe-lg-4">
            <div class="sub-titulo">contactos</div>
            <div class="t1">pode contactar-me através do e-mail ou telefone</div>
          </div>
        </div>
      </div>

      <!-- AREA INFO CONTACTOS -->
      <div class="row mx-0">
        <div class="col-10 mx-auto mt-3">
          <div class="col-12 px-0 d-flex justify-content-center">
            <div class="row d-flex justify-content-center contactos gap-2 w-100">
                <div class="col-12 col-md-3 text-center">
                    <h6>TELEFONE</h6>
                    <p class="p"><?= getTelefone() ?></p>
                </div>
                <div class="col-12 col-md-3 text-center">
                  <h6>MORADA</h6>
                  <p class="p"><?= getMorada() ?></p>
                </div>
                <div class="col-12 col-md-3 text-center">
                  <h6>E-MAIL</h6>
                  <p class="p"><?= getEmail() ?></p>
                </div>
            </div>
          </div>
          <div class="row">
              <div class="col-12 mt-3 mb-4">
                <hr class="headerhr col-3 col-md-1 mx-auto px-0 mx-0">
              </div>
          </div>
          <div class="row d-flex justify-content-center contactos">
              <div class="col-12 text-center">
                  <h6>HORARIO</h6>
                  <p class="p"><?= getHorario() ?></p>
              </div>
          </div>
        </div>
      </div>
    </main>