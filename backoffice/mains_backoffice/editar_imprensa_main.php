<?php

$form = isset($_GET["editar"]);

if($form){
    $id = $_GET["editar"];

    $imprensa = selectSQLUnico("SELECT * FROM imprensa WHERE id=$id");

    $form2 = isset($_GET["titulo"]) && isset($_GET["data_publicacao"]) && isset($_GET["imagem"]) && isset($_GET["texto"]);

    if($form2){
        $titulo = $_GET["titulo"];
        $data_publicacao = $_GET["data_publicacao"];
        $imagem = $_GET["imagem"];
        $texto = $_GET["texto"];

        iduSQL("UPDATE imprensa SET titulo='$titulo', data_publicacao='$data_publicacao', imagem='$imagem', texto='$texto' WHERE id='$id'");
        header("Location: imprensa.php");
        exit();
    }
}
else{
    header("Location: imprensa.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            editar imprensa
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <input type="hidden" name="editar" value="<?= $id; ?>">
            <label for="titulo" class="p">título</label>
            <br>
            <input type="text" name="titulo" required="required" style="width: 100%;" value="<?= $imprensa["titulo"]; ?>">
            <br><br>
            <label for="data_publicacao" class="p">data de publicação</label>
            <br>
            <input type="text" name="data_publicacao" required="required" style="width: 100%;" value="<?= $imprensa["data_publicacao"]; ?>">
            <br><br>
            <label for="imagem" class="p">imagem</label>
            <br>
            <input type="text" name="imagem" required="required" style="width: 100%;" value="<?= $imprensa["imagem"]; ?>">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="botao_gestor mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="texto" class="p">texto</label>
            <br>
            <textarea name="texto" id="editor" rows="10" style="width: 100%;"><?= $imprensa["texto"]; ?></textarea>

            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <br><br>
            <input type="submit" value="EDITAR" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>