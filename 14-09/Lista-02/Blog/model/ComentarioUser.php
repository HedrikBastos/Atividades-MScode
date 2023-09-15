<?php 

class ComentarioUser
{
    private string $nome;
    private string $comentario;

    public function nome(): string
    {
        return $this->nome;
    }

    public function comentario(): string
    {
        return $this->comentario;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setComentario(string $comentario)
    {
        $this->comentario = $comentario;

    }
}