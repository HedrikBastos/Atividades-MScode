<?php
require('Mysqli.php');

class ConsultaClientes
{
    public function consultaIdade()
    {

        $resultado = MinhaMysqli::conectar()->query("SELECT * FROM clientes WHERE `idade` > 30");

        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
}

$teste = new ConsultaClientes();
$clientes = $teste->consultaIdade();

foreach ($clientes as $clientes) {
    echo "Nome: " . $clientes['nome'] . " " . $clientes['sobrenome'] . ", idade: " . $clientes['idade'] . "<br>";
}
