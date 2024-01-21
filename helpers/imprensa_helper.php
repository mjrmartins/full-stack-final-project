<?php

function getTodosImprensa(){
    $resultado = selectSQL("SELECT * FROM imprensa ORDER BY id DESC");
    return $resultado;
}

function getTituloImprensa($id){
    $resultado = selectSQLUnico("SELECT titulo FROM imprensa WHERE id=$id");
    return $resultado["titulo"];
}

function getDataPublicacaoImprensa($id){
    $resultado = selectSQLUnico("SELECT data_publicacao FROM imprensa WHERE id=$id");
    return $resultado["data_publicacao"];
}

function getImagemImprensa($id){
    $resultado = selectSQLUnico("SELECT imagem FROM imprensa WHERE id=$id");
    return $resultado["imagem"];
}

function getTextoImprensa($id){
    $resultado = selectSQLUnico("SELECT texto FROM imprensa WHERE id=$id");
    return $resultado["texto"];
}

?>