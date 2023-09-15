<?php

class Usuario
{
    private string $email;
    private string $nome;
    private string $senha;

    public function email(): string
    {
        return $this->email;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function senha(): string
    {
        return $this->senha;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setSenha(string $senha)
    {
        $this->senha = $senha;
    }
}
