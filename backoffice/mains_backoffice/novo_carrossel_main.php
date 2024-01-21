<?php

$form = isset($_GET["observacao"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["imagem_desktop"]) && isset($_GET["imagem_mobile"]) && isset($_GET["link_saber_mais"]);

if($form){
    $observacao = $_GET["observacao"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    $imagem_desktop = $_GET["imagem_desktop"];
    $imagem_mobile = $_GET["imagem_mobile"];
    $link_saber_mais = $_GET["link_saber_mais"];

    iduSQL("INSERT INTO carousel(observacao, titulo, texto, imagem_desktop, imagem_mobile, link_saber_mais) VALUES ('$observacao', '$titulo', '$texto', '$imagem_desktop', '$imagem_mobile', '$link_saber_mais')");
    header("Location: carrossel.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            carrossel - criar novo
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <label for="observacao" class="p">observação</label>
            <br>
            <input type="text" name="observacao" required="required" autofocus style="width: 100%;">
            <br><br>
            <label for="titulo" class="p">título</label>
            <br>
            <input type="text" name="titulo" required="required" style="width: 100%;">
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
            <label for="imagem_desktop" class="p">imagem para desktop</label>
            <br>
            <input type="text" name="imagem_desktop" required="required" style="width: 100%;">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="botao_gestor mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="imagem_mobile" class="p">imagem para mobile</label>
            <br>
            <input type="text" name="imagem_mobile" required="required" style="width: 100%;">
            <a href="../filemanager/tinyfilemanager.php" target="_blank">
                <button type="button" class="botao_gestor mt-2">Gestor de Ficheiros</button>
            </a>
            <br><br>
            <label for="link_saber_mais" class="p">link para o botão "saber mais"</label>
            <br>
            <input type="text" name="link_saber_mais" required="required" style="width: 100%;">
            <input type="submit" value="CRIAR NOVO" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>