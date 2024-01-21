<?php

function getTodosLivros(){
    $resultado = selectSQL("SELECT * FROM livros");
    return $resultado;
}

function getTituloLivro($id){
    $resultado = selectSQLUnico("SELECT titulo FROM livros WHERE id=$id");
    return $resultado["titulo"];
}

function getTextoLivro($id){
    $resultado = selectSQLUnico("SELECT texto FROM livros WHERE id=$id");
    return $resultado["texto"];
}

function getTextoAbreviadoLivro($id){
    $resultado = substr(getTextoLivro($id), 0, 200) . "...";
    return $resultado;
}

function getEdicaoLivros($id){
    $resultado = selectSQLUnico("SELECT edicao FROM livros WHERE id=$id");
    return $resultado["edicao"];
}

function getImagemLivro($id){
    $resultado = selectSQLUnico("SELECT imagem FROM livros WHERE id=$id");
    return $resultado["imagem"];
}

function getDropLivros(){
    $resultado = selectSQL("SELECT id, titulo FROM livros ORDER BY titulo ASC");
    return $resultado;
}

?>