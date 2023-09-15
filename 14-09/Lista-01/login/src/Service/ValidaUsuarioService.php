<?php 
require_once('../model/Usuario.php');
require_once(__DIR__ . '/../../../Mysqli.php');

class ValidaUsuarioService
{
    public function __construct(
        private readonly Usuario $usuario
    )
    {

    }

    public function execute(): bool
    {
        try{
            $nome = $this->usuario->nome();
            $senha = $this->usuario->senha();
            $consulta = MinhaMysqli::conectar()->prepare("SELECT `usuario`, `senha` FROM cadcliente WHERE `usuario` = ? ");
            $consulta->bind_param('s', $nome);
            $consulta->execute();
            $resultado = $consulta->get_result();
            $dadosUsuario = mysqli_fetch_assoc($resultado);
            
            if ($resultado->num_rows === 0) {
                return false;
            }

            if(password_verify($senha,$dadosUsuario['senha'])){
                return true;
            }
           
        }catch(Exception $e){
            return false;
        }
       
    }  
}