
<?php

if (isset($_POST['submit'])) { 

    include_once('config.php');

    $nome = isset($_POST['nome']) ? $_POST['nome'] : ''; 
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $sexo = isset($_POST['genero']) ? $_POST['genero'] : '';
    $data_nasc = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    header('Location: login.php');
}
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | Funcionários</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #e2ddd9;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #848484;
            padding: 15px;
            border-radius: 15px;
            /*width: 20%;*/
        }
        fieldset{
            border: 3px solid #f8f1e9;
        }
        legend{
            padding: 10px;
            text-align: center;
            color: #f8f1e9;
            font-size: 20px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid #f8f1e9;
            outline: none;
            color: #f8f1e9;
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
            color: #e2ddd9;
        }
        label, p{
            color: #f8f1e9;
        }
        #dataNascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
        }
        #submit{
            background: #e2ddd9;
            width: 100%;
            border: none;
            padding: 15px;
            border-radius: 10px;
            color: #848484;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><strong>Formulário de Funcionários</strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
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