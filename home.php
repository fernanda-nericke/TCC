<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #f9e5c0;
        text-align: center;
        color: #fff;
    }
    .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 30px;
        border-radius: 15px;
    }
    a{
        text-decoration: none;
        color: #fff;
        border: 3px solid dodgerblue;
        border-radius: 15px;
        padding: 10px;
    }
    a:hover{
        background-color: dodgerblue;
    }
    .title{
        color: #44362c;
        font-family: "Ga Maamli", sans-serif;
        font-size: 100px;
    }
</style>
<body>
    <p class="title">Memória Criativa</p>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>

</html>