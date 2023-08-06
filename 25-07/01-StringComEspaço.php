<?php
function stringComEspaco($frase)
{
    if (str_contains($frase,' '))
    {
        return true;
    }
    else
    {
        return false;
    }
}

$frase = 'testecomespaço';

var_dump(stringComEspaco($frase));

?>