
<?php

if (!empty($_GET['id']))
{
    include_once('config.php');

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    // print_r($result_cliente);

    if($result->num_rows > 0){

        while($user_data_user = mysqli_fetch_assoc($result)){
            $nome = isset($user_data_user['nome']) ? $user_data_user['nome'] : ''; 
            $senha = isset($user_data_user['senha']) ? $user_data_user['senha'] : '';
            $email = isset($user_data_user['email']) ? $user_data_user['email'] : '';
            $telefone = isset($user_data_user['telefone']) ? $user_data_user['telefone'] : '';
            // $sexo = $user_data_user['sexo'];
            $sexo = isset($user_data_user['sexo']) ? $user_data_user['sexo'] : '';
            $data_nasc = $user_data_user['data_nasc'];
            // $data_nascimento = isset($user_data_user['dataNascimento']) ? $user_data_user['dataNascimento'] : '';
            $cidade = isset($user_data_user['cidade']) ? $user_data_user['cidade'] : '';
            $estado = isset($user_data_user['estado']) ? $user_data_user['estado'] : '';
            $endereco = isset($user_data_user['endereco']) ? $user_data_user['endereco'] : '';
        }
    } 
    else 
    {
        header('Location: sistema-user.php');
    }

}

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
            color: #f8f1e9;
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
        #update{
            background: #f8f1e9;
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
        <form action="saveEdit-user.php" method="POST">
            <fieldset>
                <legend><strong>Formulário de Clientes</strong></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email?>" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" name="genero" id="feminino" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : ''?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : ''?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : ''?> required>
                <label for="outro">Outro</label>
                <br><br>
                <br><br>
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" name="dataNascimento" id="dataNascimento" class="" value="<?php echo $data_nasc?>" required>
                <br><br>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade?>" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado?>" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>