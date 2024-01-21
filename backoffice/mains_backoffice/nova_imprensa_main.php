<?php

$form = isset($_GET["titulo"]) && isset($_GET["data_publicacao"]) && isset($_GET["imagem"]) && isset($_GET["texto"]);

if($form){
    $titulo = $_GET["titulo"];
    $data_publicacao = $_GET["data_publicacao"];
    $imagem = $_GET["imagem"];
    $texto = $_GET["texto"];

    iduSQL("INSERT INTO imprensa(titulo, data_publicacao, imagem, texto) VALUES ('$titulo', '$data_publicacao', '$imagem', '$texto')");
    header("Location: imprensa.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            imprensa - criar nova
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <label for="titulo" class="p">título</label>
            <br>
            <input type="text" name="titulo" required="required" style="width: 100%;" autofocus>
            <br><br>
            <label for="data_publicacao" class="p">data de publicação</label>
            <br>
            <input type="text" name="data_publicacao" required="required" style="width: 100%;">
            <br><br>
            <label for="imagem" class="p">imagem</label>
            <br>
            <input type="text" name="imagem" required="required" style="width: 100%;">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="botao_gestor mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="texto" class="p">texto</label>
            <br>
            <textarea name="texto" id="editor" rows="10" style="width: 100%;"></textarea>
            
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            
            <input type="submit" value="CRIAR NOVA" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>