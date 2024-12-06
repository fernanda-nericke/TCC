<?php

    if(!empty($_GET['id'])){
        include_once('config-cliente.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";
        $result_cliente = $conexao_cliente->query($sqlSelect);

        // print_r($result_cliente);

        if($result_cliente->num_rows > 0){

            $sqlDelete = "DELETE FROM clientes WHERE id=$id";
            $result_delete = $conexao_cliente->query($sqlDelete);

        }
    }
    header('Location: sistema.php');

?>