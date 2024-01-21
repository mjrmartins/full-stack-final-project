<?php

$pdo = New PDO("mysql:host=localhost;dbname=id21638319_sebastiao_db;charset=utf8mb4;", "id21638319_mike123", "Teste123.");

function selectSQL($sql){
    global $pdo;
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function selectSQLUnico($sql){
    global $pdo;
    $consulta = $pdo->query($sql);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function iduSQL($sql){
    global $pdo;
    $solicitacao = $pdo->query($sql);
}

?>