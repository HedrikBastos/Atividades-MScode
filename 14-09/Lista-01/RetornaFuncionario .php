<?php
require_once('Mysqli.php');

class RetornaFuncionarioCargo
{
    public function retornaCargo()
    {
        $resultado = MinhaMysqli::conectar()->query("SELECT * FROM  `funcionarios` WHERE `cargo` = 'Gerente'");

        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
}

$teste = new RetornaFuncionarioCargo;

$cargaFuncionario = $teste->retornaCargo();

foreach ($cargaFuncionario as $cargaFuncionario) {
    echo "Nome: " . $cargaFuncionario['nome'] . " | Cargo: " . $cargaFuncionario['cargo'] . "<br>";
}
