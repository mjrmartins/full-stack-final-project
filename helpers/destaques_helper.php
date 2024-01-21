<?php

function getTodosDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}

function getDestaque($id){
    $resultado = selectSQLUnico("SELECT * FROM destaques WHERE id='$id'");
    return $resultado;
}

?>