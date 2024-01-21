<?php

$autor = selectSQLUnico("SELECT * FROM autor");

$form = isset($_GET["imagem"]) && isset($_GET["texto"]);

if($form){
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];

    iduSQL("UPDATE autor SET imagem='$imagem', texto='$texto'");
    header("Location: autor.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            autor
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto">
            <label for="imagem" class="p">link da imagem do autor</label>
            <br>
            <input type="text" name="imagem" required="required" autofocus style="width: 100%;" value="<?= $autor["imagem"] ?>">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="botao_gestor mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="texto" class="p">texto sobre o autor</label>
            <br>
            <textarea name="texto" rows="10" id="editor" style="width: 100%;"><?= $autor["texto"] ?></textarea>

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