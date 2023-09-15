<?php

class UsuarioDTO
{
    public function __construct(
        public readonly string $email,
        public readonly string $senha,
        public readonly string $nome,
        public readonly string $confimarSenha,
    ) {
    }
}
