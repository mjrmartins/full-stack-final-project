<?php

function getImagemHome(){
    $resultado = selectSQLUnico("SELECT imagem_autor FROM home WHERE id=1");
    return $resultado["imagem_autor"];
}

function getTextoUltimos(){
    $resultado = selectSQLUnico("SELECT texto_ultimos FROM home WHERE id=1");
    return $resultado["texto_ultimos"];
}

?>