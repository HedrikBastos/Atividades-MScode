<?php 
require('ConsultaProdutos.php');

$listaProdutos = new ConsultaProduto();

$listar = $listaProdutos->consultaProdutos();

foreach ($listar as $value) 
{                   
    echo "id: ". $value[0] ." | produto: ".$value[1]." | Data de Pagamento: ".$value[2]." | Valor: ".$value[3]."</br>";            
}

?>