<?php 

    include_once('config.php');

    if(isset($_POST['update'])){
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $nome = isset($_POST['nome']) ? $_POST['nome'] : ''; 
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
        $sexo = isset($_POST['genero']) ? $_POST['genero'] : '';
        $data_nasc = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
        $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
        $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
        $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',data_nasc='$data_nasc',sexo='$sexo',cidade='$cidade',estado='$estado',endereco='$endereco' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('Location: sistema-user.php');

?>