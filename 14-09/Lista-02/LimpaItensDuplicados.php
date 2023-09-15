<?php
function limpaItensDuplicados($lista)
{
    $novaLista = [];


    for ($i = 0; $i < count($lista); $i++) {

        $verifica = $lista[$i];
        $duplicado = false;

        for ($index = 0; $index < count($novaLista); $index++) {
            if ($verifica == $novaLista[$index]) {
                $duplicado = true;
                break;
            }
        }
        if (!$duplicado){
            $novaLista[] = $verifica;
        }
    }
    return $novaLista;
}

$lista = [1, 3, 3, 2, 4];

