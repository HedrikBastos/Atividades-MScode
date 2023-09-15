<?php
class ComentarioDTO
{
    public function __construct(
        public readonly string $nome,
        public readonly string $comentario,
    ) {
    }
}
