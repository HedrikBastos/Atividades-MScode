<?php
session_start();

if (isset($_SESSION['erro'])) {
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
} elseif (isset($_SESSION['sucesso'])) {
    echo $_SESSION['sucesso'];
    unset($_SESSION['sucesso']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Login</title>
</head>

<body>
    <div class="box-login centralizar">
        <h2>Faça login</h2>
        <form action="public/ExecutaLogin.php" method="post">
            <input type="text" name="login" id="" class="inputs" placeholder="Usuario" required>
            <input type="password" name="password" id="" class="inputs" placeholder="Senha" required>

            <div class="left">
                <input type="submit" name="acao" id="" value="logar">
            </div>
        </form>
        <a href="public/Cadastrar.php">
            <p>Faça seu cadastro</p>
        </a>
    </div>



</body>

</html>