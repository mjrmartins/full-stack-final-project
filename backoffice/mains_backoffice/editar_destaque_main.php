<?php

$form = isset($_GET["editar"]);

if($form){
    $id = $_GET["editar"];

    $destaque = selectSQLUnico("SELECT * FROM destaques WHERE id=$id");

    $form2 = isset($_GET["observacao"]);
    if($form2){
        $observacao = $_GET["observacao"];
        iduSQL("UPDATE destaques SET observacao='$observacao' WHERE id='$id'");
        header("Location: destaques.php");
        exit();
    }
}
else{
    header("Location: destaques.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            editar destaque
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <input type="hidden" name="editar" value="<?= $id; ?>">
            <div class="col-8 t2 mx-auto text-center mt-3">
                editar destaque do livro
                <br>
                "<?= getTituloLivro($destaque["id_livro"]); ?>"
            </div>
            <br>
            <label for="observacao" class="p">observação</label>
            <br>
            <input type="text" name="observacao" required="required" style="width: 100%;" value="<?= $destaque["observacao"]; ?>">
            <br><br>
            <input type="submit" value="EDITAR" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>