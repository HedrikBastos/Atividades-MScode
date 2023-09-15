<?php
require_once('../model/Usuario.php');
require_once('../model/UsuarioDTO.php');

class VerificarCadastroService
{
  public function __construct(
    private readonly UsuarioDTO $usuarioDTO
  )
  {
  }

  public function execute(): ?Usuario
  {

    if ($this->usuarioDTO->senha != $this->usuarioDTO->confimarSenha)
    {
      return null;
    }

    if ($this->usuarioDTO->senha){
      $senhaCripto = password_hash($this->usuarioDTO->senha, PASSWORD_DEFAULT);
    }

    $usuario = new Usuario();

    $usuario->setNome($this->usuarioDTO->nome);
    $usuario->setEmail($this->usuarioDTO->email);
    $usuario->setSenha($senhaCripto);
    return $usuario;
  }
}
