<?php

$data = explode("-", $_POST['datatempo']);
$dataJson = json_encode($data);
var_dump($dataJson);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Contador Regressivo</title>
</head>

<body>
    <div id="contador">
        <div class="contador-item" id="dias"></div>
        <div class="contador-item" id="horas"></div>
        <div class="contador-item" id="minutos"></div>
        <div class="contador-item" id="segundos"></div>
    </div>

    <div id="datajson" data-php="<?php echo $dataJson; ?>"></div>
    <div id="teste"></div>

    <script src="script.js" defer></script>
</body>

</html>