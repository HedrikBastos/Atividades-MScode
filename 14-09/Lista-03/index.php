<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Regressivo</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <div class="box-data-promo">
        <h2>Defina a data para iniciar o temporizador</h2>
        <form method="post" action="ContadorRegressivo.php">
            <input class="inputs" type="date" name="datatempo" id="" min="<?php echo date("Y-m-d", strtotime('today', time())) ?>">
            <br>
            <input class="centralizar" name="acao" type="submit" value="Enviar">
        </form>
    </div>

</body>

</html>