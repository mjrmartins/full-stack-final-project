<?php

$destaques = getTodosDestaques();

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            destaques
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center tabela">
        <form action="novo_destaque.php" class="mb-3">
            <button name="criar" value="" class="botao_criar">criar novo</button>
        </form>
        <table class="border border-danger">
            <tr>
                <th>id</th>
                <th>livro (imagem)</th>
                <th>livro (título)</th>
                <th>observação</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
            <?php foreach($destaques as $d): ?>
                <tr>
                    <td><?= $d["id"]; ?></td>
                    <td><img src="<?= getImagemLivro($d["id_livro"]); ?>" alt="imagem livro <?= getTituloLivro($d["id_livro"]); ?>" height="160"></td>
                    <td><?= getTituloLivro($d["id_livro"]); ?></td>
                    <td><?= $d["observacao"]; ?></td>
                    <td>
                        <form action="editar_destaque.php">
                            <button name="editar" value="<?= $d["id"]; ?>" class="botao_editar">e</button>
                        </form>
                    </td>
                    <td>
                        <form action="apagar_destaque.php">
                            <button name="apagar" value="<?= $d["id"]; ?>" class="botao_apagar">x</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>