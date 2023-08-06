<?php 
function retornaNumeroAusente($listaNumeros)
{
    
    for ($i=1; $i <= count($listaNumeros); $i++)
    { 
       if (!in_array($i,$listaNumeros))
       {
            return $i;
       }
            
    }
}

$listaNumeros = array(2,1,3,5,6,8,7,9,10);

echo retornaNumeroAusente($listaNumeros);

?>