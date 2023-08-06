<?php 
function retornaSegundoMaior($listaNumeros)
{
    $maior = $listaNumeros[0];
    $segundoMaior = $listaNumeros[0];

    foreach ($listaNumeros as $value) 
    {
        if ($value > $maior) 
        {
            $segundoMaior = $maior;
            $maior = $value;
        } 
        elseif ($value > $segundoMaior && $value != $maior) 
        {
            $segundoMaior = $value;
        }
    }

    return $segundoMaior;
}

$listaNumeros = array(1, 50, 3, 4, 45, 6, 7, 8, 9, 10);

echo (retornaSegundoMaior($listaNumeros));

?>