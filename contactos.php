<?php

require_once("requesitos.php");

$pagina_atual = "contactos";

require("componentes/header.php");
require("mains/contactos_main.php");

?>
<footer class="container-fluid mt-5 mb-5">
      <!-- HR RODAPE -->
      <hr class="headerhr col-11 d-md-none mx-auto px-0 mx-0">

      <!-- NAVBAR RODAPE -->
      <div class="row">
        <nav class="col-11 mx-auto d-none d-md-flex py-4 gap-4 justify-content-center">
          <a class="nav-link" href="index.php">HOME</a>
          <a class="nav-link" href="autor.php">AUTOR</a>
          <a class="nav-link" href="#" onclick="ativarDrop()">LIVROS</a>
          <a class="nav-link" href="imprensa.php">IMPRENSA</a>
          <a class="nav-link active-nav" href="contactos.php">CONTACTOS</a>
        </nav>
      </div>

      <!-- CONTACTOS E REDES SOCIAIS -->
      <div class="row d-flex justify-content-center mt-5 contactos">
        <div class="d-none d-md-block col-md-6">
          <div class="row">
            <div class="col-12 text-center text-md-start t1">
              contactos
            </div>
          </div>
          <div class="row mt-3 gap-3 gap-md-0 mb-5 mb-md-0">
            <div class="col-12 col-md-5 text-center text-md-start">
              <div class="titulo-contacto">morada</div>
              <div><?= getMorada() ?></div>
            </div>
            <div class="col-12 col-md-3 text-center text-md-start">
              <div class="titulo-contacto">telefone</div>
              <div><?= getTelefone() ?></div>
            </div>
            <div class="col-12 col-md-4 text-center text-md-start">
              <div class="titulo-contacto">email</div>
              <div><?= getEmail() ?></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 contactos mt-4 mt-md-0">
          <div class="row">
            <div class="col-12 t1 text-center">siga-me nas redes sociais</div>
            <div class="col-12 mt-4 d-flex justify-content-center gap-4">
              <a href="<?= getInstagram() ?>" class="icone instagram" target="blank"></a>
              <a href="<?= getFacebook() ?>" class="icone facebook" target="blank"></a>
              <a href="<?= getLinkedin() ?>" class="icone linkedin" target="blank"></a>
            </div>
          </div>
        </div>
      </div>

      <!-- LIVRO RECLAMACOES & COOKIES -->
      <div class="row d-flex justify-content-center mt-5 pb-4">
        <div class="col-12 col-md-5 text-center text-md-start">
          <a href="#" class="me-2"><img src="img/livroreclamacoes.svg" alt="livro reclamacoes"></a>
          <a href="#" class="ms-5"><img src="img/ralc.svg" alt="ralc"></a>
        </div>
        <div class="col-12 col-md-5 mt-5 mt-md-0 text-center p cookies">
          Política de Cookies.
          <br>
          Copyright &copy; 2021 Grupo MediaMaster. Todos os direitos reservados.
        </div>
      </div>
    </footer>

  <!-- JS -->
  <script src="https://primeiroprojeto-miguel.000webhostapp.com/js/main.js"></script>
</body>
</html>