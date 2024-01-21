<?php

$contactos = selectSQLUnico("SELECT * FROM contactos");

$form = isset($_GET["morada"]) && isset($_GET["telefone"]) && isset($_GET["email"]) && isset($_GET["instagram"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"]) && isset($_GET["horario"]);

if($form){
    $morada = $_GET["morada"];
    $telefone = $_GET["telefone"];
    $email = $_GET["email"];
    $instagram = $_GET["instagram"];
    $facebook = $_GET["facebook"];
    $linkedin = $_GET["linkedin"];
    $horario = $_GET["horario"];

    iduSQL("UPDATE contactos SET morada='$morada', telefone='$telefone', email='$email', instagram='$instagram', facebook='$facebook', linkedin='$linkedin', horario='$horario'");
    header("Location: contactos.php");
    exit();
}

?>

<main class="container mt-3 px-0 mx-auto">
    <div class="row mt-2 mb-2 px-0 mx-0">
        <div class="col-4 t2destaque mx-auto text-center mt-3">
            contactos
        </div>
    </div>
    <div class="row mt-3 mb-2 px-0 mx-0 text-center">
        <form action="" class="col-8 mx-auto" autocomplete="off">
            <label for="morada" class="p">morada</label>
            <br>
            <textarea name="morada" id="editor" cols="30" rows="3" required="required" autofocus style="width: 100%;"><?= $contactos["morada"] ?></textarea>

            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

            <br><br>
            <label for="telefone" class="p">telefone</label>
            <br>
            <input type="text" name="telefone" required="required" style="width: 100%;" value="<?= $contactos["telefone"] ?>">
            <br><br>
            <label for="email" class="p">email</label>
            <br>
            <input type="text" name="email" required="required" style="width: 100%;" value="<?= $contactos["email"] ?>">
            <br><br>
            <label for="instagram" class="p">link do instagram</label>
            <br>
            <input type="text" name="instagram" required="required" style="width: 100%;" value="<?= $contactos["instagram"] ?>">
            <br><br>
            <label for="facebook" class="p">link do facebook</label>
            <br>
            <input type="text" name="facebook" required="required" style="width: 100%;" value="<?= $contactos["facebook"] ?>">
            <br><br>
            <label for="linkedin" class="p">link do linkedin</label>
            <br>
            <input type="text" name="linkedin" required="required" style="width: 100%;" value="<?= $contactos["linkedin"] ?>">
            <br><br>
            <label for="horario" class="p">horario</label>
            <br>
            <input type="text" name="horario" required="required" style="width: 100%;" value="<?= $contactos["horario"] ?>">
            <input type="submit" value="EDITAR" class="botao_submeter mb-3 mt-3">
        </form>
    </div>
</main>