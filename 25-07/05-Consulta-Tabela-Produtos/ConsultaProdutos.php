<?php 
require('Mysqli.php');

class ConsultaProduto
{
    public function consultaProdutos()
    {
        
        $resultado= MinhaMysqli::conectar()->query("SELECT * FROM `produtos`");

        return mysqli_fetch_all($resultado);
    }
}

?>