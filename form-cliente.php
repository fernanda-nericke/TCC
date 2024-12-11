
<?php

if (isset($_POST['submit'])){
    
    include_once('config-cliente.php');

    $nome = isset($_POST['nome']) ? $_POST['nome'] : ''; 
    // $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $sexo = isset($_POST['genero']) ? $_POST['genero'] : '';
    $data_nascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';

    $result_cliente = mysqli_query($conexao_cliente, "INSERT INTO clientes(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");

    header('Location: sistema.php');

}


    // echo $telefone;
    // print_r('<br>');
    // echo $nome;
    // print_r('<br>');
    // echo $senha;
    // print_r('<br>');
    // echo $email;
    // print_r('<br>');
    // echo $sexo;
    // print_r('<br>');
    // echo $data_nascimento;
    // print_r('<br>');
    // echo $cidade;
    // print_r('<br>');
    // echo $estado;
    // print_r('<br>');
    // echo $endereco; -->





 if (isset($_POST['submit'])) { 

    include_once('config-cliente.php');

    $nome = isset($_POST['nome']) ? $_POST['nome'] : ''; 
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $sexo = isset($_POST['genero']) ? $_POST['genero'] : '';
    $data_nascimento = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';

    $result = mysqli_query($conexao, "INSERT INTO clientes(nome,senha,email,telefone,sexo,data_nascimento,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");

    header('Location: login.php');
}
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title> Formulário | Clientes</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;   
            min-height: 100vh;     
            background-color: #f4f4f4; 
        }
        fieldset{
            border: 3px solid #f4f4f4;
        }
        legend{
            padding: 10px;
            text-align: center;
            color: #f4f4f4;
            font-size: 20px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid #f4f4f4;
            outline: none;
            color: #f4f4f4;
            font-size: 14px;
            width: 95%;
            letter-spacing: 1px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput, 
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #f4f4f4;
        }
        label, p{
            color: #f4f4f4;
        }
        #dataNascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
        }
        #submit{
            background: #f4f4f4;
            width: 100%;
            border: none;
            padding: 15px;
            border-radius: 10px;
            color: #f7aac8;
            font-size: 18px;
            cursor: pointer;
        }
        .container {
            background-color: #f7aac8;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%; 
            max-width: 800px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="form-cliente.php" method="POST">
            <fieldset>
                <legend><strong>FORMULÁRIO DE CLIENTES</strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <!-- <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                 <br><br> -->
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <br><br>
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" name="dataNascimento" id="dataNascimento" class="" required>
                <br><br>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html> 