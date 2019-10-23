<?php

    $servidor = "localhost:3306";
    $bancodados = "iapneu77_bd_iap";
    $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";
    $usuario = "root";
    $senha = "";

    $conexao = new PDO($datasource, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>