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
        background-image: linear-gradient(45deg, pink, rgb(129, 129, 245)) ;
    }
    .login{
        background-color: #f1f3a5;
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
    }
    .button{
        background-color: pink;
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 5px;
    }
    .button:hover{
        background-color: lightpink;
    }
</style>
<body>
    <a href="home.php">Voltar</a>
    <div class="login">
        <h1>Login</h1>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button class="button">Enviar</button>
    </div>
</body>

</html>