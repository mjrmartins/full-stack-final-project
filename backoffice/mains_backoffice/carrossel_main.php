<?php

$carrosseis = getTodosCarousel();

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            carrossel
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center tabela">
        <form action="novo_carrossel.php" class="mb-3">
            <button name="criar" value="" class="botao_criar">criar novo</button>
        </form>
        <table>
            <tr>
                <th>id</th>
                <th>imagem (desktop)</th>
                <th>imagem (mobile)</th>
                <th>observação</th>
                <th>título</th>
                <th>texto</th>
                <th>link do botão "saber mais"</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
            <?php foreach($carrosseis as $c): ?>
                <tr>
                    <td><?= $c["id"]; ?></td>
                    <td>
                        <img src="<?= getImagemDesktop($c["id"]); ?>" alt="imagem desktop <?= getTituloCarousel($c["id"]); ?>" height="130">
                    </td>
                    <td>
                        <img src="<?= getImagemMobile($c["id"]); ?>" alt="imagem mobile <?= getTituloCarousel($c["id"]); ?>" height="130">
                    </td>
                    <td><?= getObservacaoCarousel($c["id"]); ?></td>
                    <td><?= getTituloCarousel($c["id"]); ?></td>
                    <td><?= getTextoCarousel($c["id"]); ?></td>
                    <td><?= getLinkSaberMais($c["id"]); ?></td>
                    <td>
                        <form action="editar_carrossel.php">
                            <button name="editar" value="<?= $c["id"]; ?>" class="botao_editar">e</button>
                        </form>
                    </td>
                    <td>
                        <form action="apagar_carrossel.php">
                            <button name="apagar" value="<?= $c["id"]; ?>" class="botao_apagar">x</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>