<?php
require_once('../model/Usuario.php');
require_once(__DIR__ . '/../../../Mysqli.php');

class CadastrarUsuarioService
{
    public function __construct(
        private readonly Usuario $usuario
    )
    {
    }

    public function execute(): bool
    {
        try{
            $resultado = MinhaMysqli::conectar()->prepare("INSERT INTO cadcliente VALUES(null,?,?,?) ");

            $email = $this->usuario->email();
            $nome =  $this->usuario->nome();
            $senha = $this->usuario->senha();
            $resultado->bind_param("sss", $email, $nome, $senha);
    
            $resultado->execute();

        }catch(Exception $e){
            return false;
        }
      
        return true;
    }
}
