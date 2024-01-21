<?php

$livros = getTodosLivros();

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            livros
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center tabela">
        <form action="novo_livro.php" class="mb-3">
            <button name="criar" value="" class="botao_criar">criar novo</button>
        </form>
        <table>
            <tr>
                <th>id</th>
                <th>título</th>
                <th>texto</th>
                <th>edição</th>
                <th>imagem</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
            <?php foreach($livros as $l): ?>
                <tr>
                    <td><?= $l["id"]; ?></td>
                    <td><?= getTituloLivro($l["id"]); ?></td>
                    <td><?= getTextoLivro($l["id"]); ?></td>
                    <td><?= getEdicaoLivros($l["id"]); ?></td>
                    <td>
                        <img src="<?= getImagemLivro($l["id"]); ?>" alt="imagem <?= getTituloLivro($l["id"]); ?>" height="130">
                    </td>
                    <td>
                        <form action="editar_livro.php">
                            <button name="editar" value="<?= $l["id"]; ?>" class="botao_editar">e</button>
                        </form>
                    </td>
                    <td>
                        <form action="apagar_livro.php">
                            <button name="apagar" value="<?= $l["id"]; ?>" class="botao_apagar">x</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>