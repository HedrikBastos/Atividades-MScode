<?php
require_once('../model/ComentarioUser.php');
require_once(__DIR__ . '/../../Mysqli.php');

class CadastrarComentarioService
{
    public function __construct(
        private readonly ComentarioUser $ComentarioUser
    )
    {  
    }

    public function execute(): bool
    {
        try{
            $resultado = MinhaMysqli::conectar()->prepare("INSERT INTO comentarios VALUES(null,?,?) ");

        
            $nome =  $this->ComentarioUser->nome();
            $senha = $this->ComentarioUser->comentario();
            $resultado->bind_param("ss", $nome, $senha);
    
            $resultado->execute();

        }catch(Exception $e){
            return false;
        }
      

        return true;
    }
}