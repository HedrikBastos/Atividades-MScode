<?php
require('Mysqli.php');

class ProdutosIgualOuInferior
{
    public function consultaProdIgualOuInferior()
    {
        $resultado = MinhaMysqli::conectar()
            ->query("SELECT * FROM `produtos` WHERE `valor` <= 50.00");

        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
}

$teste = new ProdutosIgualOuInferior();
$produtos = $teste->consultaProdIgualOuInferior();

foreach ($produtos as $produtos) {
    echo $produtos['titulo'] . ": " . $produtos['valor'] . "<br>";
}
