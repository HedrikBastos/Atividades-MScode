<?php 
require_once('Mysqli.php');

class AtualizaQuantidadeEstoque
{
    public function atualizaQuantidade(int $novoValor, int $produtoId)
    {
        $resultado = MinhaMysqli::conectar()->prepare("UPDATE produtos SET `quantidade_estoque` = ? WHERE `id_produto` = ? ");
        
        $resultado->bind_param("ii", $novoValor, $produtoId);

        $resultado->execute();

        return true;
    }
}

try {
    $teste = new AtualizaQuantidadeEstoque;

   var_dump($pedido = $teste->atualizaQuantidade(4,1));

} catch(Exception $e) {
    echo "Ocorreu um erro: " . $e->getMessage();
}
