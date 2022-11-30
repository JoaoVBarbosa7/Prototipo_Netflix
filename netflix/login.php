<?php

if(isset($_POST['submit'])) {

    require('config.php');
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha) values('$nome', '$senha')");
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" type="text/css">
    <title>Login</title>
</head>

<body class="body">
<div class="form">
<h1>Entrar</h1>
    <form action="login.php" method="POST">
        <input class="inputs" input type="text" placeholder="Login"/>
        <br/>
        <br/>
        <input class="inputs" input type="text" placeholder="Senha"/>
        <br/>
        <br/>
        <input class="submit1" type="submit" value="Entrar"/>
    </form>
</div>

</body>
</html>