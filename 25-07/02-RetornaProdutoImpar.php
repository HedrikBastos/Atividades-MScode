<?php
function retonraProdutoImpar($listaNumeros)
{
    $contador = 1;

    foreach ($listaNumeros as $value) 
    {
           
           if ($value % 2 != 0 && $value > 0)
           {
            $contador *= $value;     
           }
          
    }

    return $contador;
}

$listaNumeros = array(1, 2, 3, 4, 5, 6, 7);

$resultado = retonraProdutoImpar($listaNumeros);

echo $resultado;

?>