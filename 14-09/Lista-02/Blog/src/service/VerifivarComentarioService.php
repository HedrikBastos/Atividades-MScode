<?php 
require_once('../model/ComentarioUser.php');
require_once('../model/ComentarioDTO.php');

class VerificarComentarioService
{
    public function __construct(
        private readonly ComentarioDTO $comentarioDTO
    )
    {
    }
        
    public function execute(): ?ComentarioUser
    {
        if(!empty($comentarioDTO)){ 
            echo "deu ruim no verificar";
            die;
        }
        $comentarioUser = new ComentarioUser();

        $comentarioUser->setNome($this->comentarioDTO->nome);
        $comentarioUser->setComentario($this->comentarioDTO->comentario);
        return $comentarioUser;
    }
}