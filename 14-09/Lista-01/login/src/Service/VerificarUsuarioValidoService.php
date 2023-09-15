<?php
require_once('../model/Usuario.php');
require_once('../model/UsuarioDTO.php');

class VerficarUsuarioValidoService
{
    public function __construct(
        private readonly UsuarioDTO $usuarioDTO
    )
    { 
    }
    
    public function execute(): ?Usuario
    {    
        $usuario = new Usuario();
        $usuario->setNome($this->usuarioDTO->nome);
        $usuario->setSenha($this->usuarioDTO->senha);
        return $usuario;
    }
}
