<?php

function getImagemAutor(){
    $resultado = selectSQLUnico("SELECT imagem FROM autor WHERE id=1");
    return $resultado["imagem"];
}

function getTexto(){
    $resultado = selectSQLUnico("SELECT texto FROM autor WHERE id=1");
    return $resultado["texto"];
}

function getTextoAbreviado(){
    $resultado = substr(getTexto(), 0, 1000) . "...";
    return $resultado;
}

?>