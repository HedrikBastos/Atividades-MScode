<?php 
require_once('../model/ComentarioDTO.php');
require_once('../src/service/VerifivarComentarioService.php');
require_once('../src/service/cadastrarComentarioService.php');
require_once('../src/service/ConsultaComentariosService.php');

if (isset($_POST['acao'])) {
    $nome = $_POST['username'];
    $comentario = $_POST['comentario'];
    $comentarioDTO = new ComentarioDTO(
        $nome,
        $comentario
    );

    $verificaComentario  = new VerificarComentarioService($comentarioDTO);
    $comentario = $verificaComentario->execute();

    try{
        $cadastrarService = new CadastrarComentarioService($comentario);
        $cadastroComentario = $cadastrarService->execute();
        include('../src/service/sucesso.php');
     
    } catch (TypeError $e) {
        echo "deu ruim";
    }
}

$consultaComentarios = new ConsultaComentariosService();
$listaComentarios = $consultaComentarios->comentarios();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/style.css">
    <title>Meu Blog</title>
</head>

<body>
    <header>
        <h1>Meu Blog</h1>
    </header>

    <article class="container">
        <h2>Título do Artigo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
    </article>

    <section id="comments" class="container">

        <h3>Deixe um Comentário</h3>
        <form action="#" method="post">
            <label for="username">Nome de Usuário:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="comentario">Comentário:</label><br>
            <textarea id="comentario" name="comentario" rows="4" cols="50" required></textarea><br>

            <button type="submit" name="acao">Enviar Comentário</button>
        </form>

        <h3>Comentários</h3>

        <?php foreach($listaComentarios as $listaComentarios){ ?>
        <ul>
            <li>
                <strong><?php echo $listaComentarios['nome']?></strong>
                <p><?php echo $listaComentarios['comentario']?></p>
            </li>
        <?php } ?>
        </ul>
    </section>

    <footer>
        <p>&copy; 2023 Meu Blog</p>
    </footer>
</body>

</html>