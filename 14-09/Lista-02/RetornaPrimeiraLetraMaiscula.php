<?php
function retornaPrimeiraLetraMaiusc($lista)
{
    $novalista = [];
    foreach ($lista as $value) {
        $novalista[] = ucfirst(strtolower($value));
    }

    return $novalista;
}

$lista = ['maria', 'pedro', 'sofia', 'JOAO'];

$resultado = retornaPrimeiraLetraMaiusc($lista);
