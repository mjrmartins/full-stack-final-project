<?php

$home = selectSQLUnico("SELECT * FROM home");

$form = isset($_GET["imagem_autor"]) && isset($_GET["texto_ultimos"]);

if($form){
    $imagem_autor = $_GET["imagem_autor"];
    $texto_ultimos = $_GET["texto_ultimos"];

    iduSQL("UPDATE home SET imagem_autor='$imagem_autor', texto_ultimos='$texto_ultimos'");
    header("Location: home.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            home
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto">
            <label for="imagem_autor" class="p">link da imagem da área "bem vindo"</label>
            <br>
            <input type="text" name="imagem_autor" required="required" autofocus style="width: 100%;" value="<?= $home["imagem_autor"] ?>">
            <br>
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="botao_gestor mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="texto_ultimos" class="p">texto da area "últimos livros"</label>
            <br>
            <textarea name="texto_ultimos" id="editor" rows="10" style="width: 100%;"><?= $home["texto_ultimos"] ?></textarea>

            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <input type="submit" value="EDITAR" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>