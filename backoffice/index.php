<?php

require_once("requisitos_backoffice.php");

$form = isset($_POST["user"]) && isset($_POST["pass"]);
if($form){
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    if(logIn($user, $pass)){
        header("Location: inicio.php");
        exit();
    }
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
    <!-- CSS Style -->
    <link rel="stylesheet" href="css_backoffice/style_backoffice.css">

</head>

<body class="w-100 mx-auto">
    <header class="container-fluid w-100 px-0 mx-0">
        <div class="row px-0 mx-0">
            <div class="col-12 t1 text-center mt-4 px-0 mx-0">
                backoffice - login
            </div>
        </div>
    </header>
    <main class="container mt-3 px-0 mx-auto">

        <?php if($form): ?>

            <h1 class="t1 text-danger text-center pt-3">login inválido</h1>

        <?php endif; ?>

        <div class="row mt-2 mb-2 px-0 mx-0">
            <div class="col-12 t2destaque text-center mx-auto text-center mt-3">
                <form action="" autocomplete="off" method="POST">
                    <input type="text" placeholder="Username" name="user" required="required" autofocus>
                    <br><br>
                    <input type="password" placeholder="Password" name="pass" required="required">
                    <br><br>
                    <input type="submit" value="Login" class="botao_submeter mb-3">
                </form>
            </div>
        </div>
    </main>
    <footer class="container-fluid px-0 mx-0 mt-4">
        <div class="row px-0 mx-0">
            <div class="col-4 t3 mx-auto text-center">
                copyright &copy; 2023 miguel martins
            </div>
        </div>
    </footer>
</body>
</html>