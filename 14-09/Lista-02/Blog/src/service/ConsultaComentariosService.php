<?php
require_once('../Mysqli.php');
class ConsultaComentariosService
{
    private $comentarios = [];

    public function __construct()
    {
        $this->execute();
    }

    private function execute()
    {
        try
        {
            $resultado = MinhaMysqli::conectar()->query("SELECT * FROM comentarios ORDER BY `id` DESC");

            if($resultado)
            {
                $this->comentarios =  mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            }
        }
        catch(Exception $e)
        {
            return false;
        }
      
    }

    public function comentarios()
    {
        return $this->comentarios;
    }

}