<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'test';

    $conexao_cliente = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if ($conexao_cliente->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else {
    //     echo "Conexão efetuada com sucesso";
    // }
?>

