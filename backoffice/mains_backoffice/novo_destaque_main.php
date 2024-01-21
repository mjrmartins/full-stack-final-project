<?php

$livros = getTodosLivros();

$form = isset($_GET["observacao"]) && isset($_GET["id_livro"]);

if($form){
    $observacao = $_GET["observacao"];
    $id_livro = $_GET["id_livro"];

    iduSQL("INSERT INTO destaques(observacao, id_livro) VALUES ('$observacao', '$id_livro')");
    header("Location: destaques.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            destaque - criar novo
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <table>
                <tr>
                    <th>id</th>
                    <th>título</th>
                    <th>imagem</th>
                </tr>
                <?php foreach($livros as $l): ?>
                    <tr>
                        <td><?= $l["id"]; ?></td>
                        <td><?= getTituloLivro($l["id"]); ?></td>
                        <td>
                            <img src="<?= getImagemLivro($l["id"]); ?>" alt="imagem <?= getTituloLivro($l["id"]); ?>" height="130">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <label for="id_livro" class="p">livro a destacar</label>
            <br>
            <select name="id_livro">
                <?php foreach($livros as $l): ?>
                    <option value="<?= $l["id"]; ?>"><?= $l["titulo"]; ?></option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <label for="observacao" class="p">observação</label>
            <br>
            <input type="text" name="observacao" required="required" style="width: 100%;">
            <br>
            <input type="submit" value="CRIAR NOVO" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>