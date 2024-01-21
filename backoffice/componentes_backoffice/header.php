<?php

if(!verificarLogin()){
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice - Sebastião Alves</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- CKEDITOR -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <!-- CSS Style -->
    <link rel="stylesheet" href="css_backoffice/style_backoffice.css">

</head>

<body class="w-100 mx-auto">
    <header class="container-fluid w-100 px-0 mx-0">
        <div class="row px-0 mx-0">
            <div class="col-12 t1 text-center mt-4 px-0 mx-0">
                sebastião alves - backoffice
            </div>
        </div>
        <div class="row w-100 px-0 mx-0 mt-3">
            <nav class="col-12 nav bg-secondary d-flex flex-row justify-content-center gap-4 mx-auto">
                <a href="inicio.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "inicio" ? "active-nav": ""); ?>">início</a>

                <a href="home.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "home" ? "active-nav": ""); ?>">home</a>

                <a href="autor.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "autor" ? "active-nav": ""); ?>">autor</a>

                <a href="carrossel.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "carrossel" ? "active-nav": ""); ?>">carrossel</a>

                <a href="livros.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "livros" ? "active-nav": ""); ?>">livros</a>

                <a href="destaques.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "destaques" ? "active-nav": ""); ?>">destaques</a>

                <a href="imprensa.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "imprensa" ? "active-nav": ""); ?>">imprensa</a>

                <a href="contactos.php" class="t2 text-decoration-none text-light <?= ($pagina_atual == "contactos" ? "active-nav": ""); ?>">contactos</a>

                <a href="logout.php" class="t2 text-decoration-none text-light">logout</a>
            </nav>
        </div>
        
    </header>