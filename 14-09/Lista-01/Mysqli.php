<?php

require_once('config.php');

class MinhaMysqli
{
    private static $conexao;

    public static function conectar()
    {
        if (self::$conexao == null) {
            self::$conexao = new mysqli(HOST, USER, PASSWORD, DATABASE);
        }

        return self::$conexao;
    }
}
