<?php
session_start();

if (isset($_SESSION['erro'])) {
    echo $_SESSION['erro'];
    unset($_SESSION['erro']);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/style.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="box-login">

        <h2>Cadastro</h2>

        <form action="Cadastro.php" method="post">
            <input type="email" name="email" id="" class="inputs" placeholder="Email" required>

            <input type="text" name="login" id="" class="inputs" placeholder="Usuario" required>

            <input type="password" name="password" id="" class="inputs" placeholder="Senha" minlength="8">

            <input type="password" name="passwordConfim" id="" class="inputs" placeholder="Confimar senha" minlength="8" required>

            <div class="left">
                <input type="submit" name="acao" id="" value="Cadastrar">
            </div>
        </form>
</body>

</html>