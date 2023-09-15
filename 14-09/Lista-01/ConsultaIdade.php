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
