<?php

$form = isset($_GET["apagar"]);

if($form){
    $id = $_GET["apagar"];

    $carrossel = selectSQLUnico("SELECT * FROM carousel WHERE id=$id");

    $form2 = isset($_GET["sim"]);
    if($form2){
        iduSQL("DELETE FROM carousel WHERE id='$id'");
        header("Location: carrossel.php");
        exit();
    }

}
else{
    header("Location: carrossel.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            apagar carrossel
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <input type="hidden" name="apagar" value="<?= $id; ?>">
            <p class="t2">
                tem a certeza de que quer apagar o carrossel
                <br>
                "<?= $carrossel["titulo"] ;?>" ?
            </p>
            <input type="submit" name="sim" value="APAGAR" class="botao_apagar mb-3 mt-3">
        </form>
        <a href="carrossel.php"><button class="botao_criar mb-3">voltar</button></a>
    </div>
</main>