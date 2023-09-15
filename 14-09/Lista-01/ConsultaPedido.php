<?php
require_once('Mysqli.php');

class ConsultaPedido
{
    public function ConsultaPedido()
    {
        $resultado = MinhaMysqli::conectar()->query("SELECT * FROM `pedidos` WHERE `data` BETWEEN '2023-01-01' AND '2023-12-31' ");

        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
}

$teste = new ConsultaPedido;

$pedido = $teste->ConsultaPedido();

foreach ($pedido as $pedido) {
    echo "ID: " . $pedido['id_pedido'] . " | Data da compra: " . $pedido['data'] . " | Valor: " . $pedido['valor'] .  " | Status: " . $pedido['status'] . "<br>";
}
