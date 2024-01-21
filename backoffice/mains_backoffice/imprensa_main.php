<?php

$imprensas = getTodosImprensa();

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            imprensa
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center tabela">
        <form action="nova_imprensa.php" class="mb-3">
            <button name="criar" value="" class="botao_criar">criar novo</button>
        </form>
        <table>
            <tr>
                <th>id</th>
                <th>título</th>
                <th>data de publicação</th>
                <th>imagem</th>
                <th>texto</th>
                <th>editar</th>
                <th>apagar</th>
            </tr>
            <?php foreach($imprensas as $i): ?>
                <tr>
                    <td><?= $i["id"]; ?></td>
                    <td><?= getTituloImprensa($i["id"]); ?></td>
                    <td><?= getDataPublicacaoImprensa($i["id"]); ?></td>
                    <td>
                        <img src="<?= getImagemImprensa($i["id"]); ?>" alt="imagem <?= getTituloImprensa($i["id"]); ?>" height="110">
                    </td>
                    <td><?= getTextoImprensa($i["id"]); ?></td>
                    <td>
                        <form action="editar_imprensa.php">
                            <button name="editar" value="<?= $i["id"]; ?>" class="botao_editar">e</button>
                        </form>
                    </td>
                    <td>
                        <form action="apagar_imprensa.php">
                            <button name="apagar" value="<?= $i["id"]; ?>" class="botao_apagar">x</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>