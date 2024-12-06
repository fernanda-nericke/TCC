<?php

    if(!empty($_GET['id'])){
        include_once('config.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);

        // print_r($result_cliente);

        if($result->num_rows > 0){

            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $result_delete = $conexao->query($sqlDelete);

        }
    }
    header('Location: sistema-user.php');

?>