
<?php

if (isset($_POST['submit'])) { 

    include_once('config.php');

    $nome = isset($_POST['nome']) ? $_POST['nome'] : ''; 
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
    $sexo = isset($_POST['genero']) ? $_POST['genero'] : '';
    $data_nasc = isset($_POST['dataNascimento']) ? $_POST['dataNascimento'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';

    
    
   

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}


// if(isset($_POST['submit']))
// {
//     // print_r($_POST['nome']);
//     // print_r('<br>');
//     // print_r($_POST['email']);
//     // print_r('<br>');
//     // print_r($_POST['telefone']);

//     

//     $nome = $POST['nome'];
//     $email = $POST['email'];
//     $telefone = $POST['telefone'];
//     $sexo = $POST['feminino'];
//     //$data_nasc = $POST['data_nasc'];
//     $cidade = $POST['cidade'];
//     $estado = $POST['estado'];
//     $endereco = $POST['endereco'];

   


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | Clientes</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, pink, rgb(245, 129, 197)) ;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #8181f5;
            padding: 15px;
            border-radius: 15px;
            /*width: 20%;*/
        }
        fieldset{
            border: 3px solid #fff;
        }
        legend{
            padding: 10px;
            text-align: center;
            color: #fff;
            font-size: 20px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            color: #fff;
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
            color: pink;
        }
        label, p{
            color: #fff;
        }
        #dataNascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
        }
        #submit{
            background-image: linear-gradient(to right, pink, rgb(245, 129, 197)) ;
            width: 100%;
            border: none;
            padding: 15px;
            border-radius: 10px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(236, 166, 199), rgb(236, 94, 177)) ;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><strong>Formulário de Clientes</strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
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
                <label for="feminino">Fêmea</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Macho</label>
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