<?php

$form = isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["edicao"]) && isset($_GET["imagem"]);

if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $edicao = $_GET["edicao"];
    $imagem = $_GET["imagem"];

    iduSQL("INSERT INTO livros(titulo, texto, edicao, imagem) VALUES ('$titulo', '$texto', '$edicao', '$imagem')");
    header("Location: livros.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            livro - criar novo
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <label for="titulo" class="p">título</label>
            <br>
            <input type="text" name="titulo" required="required" style="width: 100%;" autofocus>
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

            <br><br>
            <label for="edicao" class="p">edição</label>
            <br>
            <textarea name="edicao" id="editor2" rows="5" style="width: 100%;"></textarea>

            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor2' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <br><br>
            <label for="imagem" class="p">imagem</label>
            <br>
            <input type="text" name="imagem" required="required" style="width: 100%;">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="botao_gestor mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <input type="submit" value="CRIAR NOVO" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>