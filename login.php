<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background: #e2ddd9;
    }
    .login{
        background-color: #848484;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
    }
    input{
        padding: 15px;
        border: none;
        outline: none;
        border-radius: 5px;
        color: #2c171c;
    }
    .inputSubmit{
        background-color: #f8f1e9;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 5px;
    }
    h1{
        color: #f8f1e9;
    }
    a{
        text-decoration: none;
        color: #f8f1e9;
        font-size: 14px;
    }
    .sublinhado{
        text-decoration: underline;
    }
</style>
<body>
    <a href="home.php">Voltar</a>
    <div class="login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
        <br>
        <a href="formulario.php">Não tem conta? <span class="sublinhado">Cadastre-se</span></a>
    </div>
</body>

</html>