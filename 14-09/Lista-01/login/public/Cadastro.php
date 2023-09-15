<?php
require_once('../src/Service/CadastrarUsuarioService.php');
require_once('../src/Service/VerificarCadastroService.php');
require_once('../model/UsuarioDTO.php');

if (isset($_POST['acao'])) {
    $email = $_POST['email'];
    $nome = $_POST['login'];
    $senha = $_POST['password'];
    $confirmarSenha = $_POST['passwordConfim'];
    $usuarioDTO = new UsuarioDTO(
        $email,
        $senha,
        $nome,
        $confirmarSenha
    );

    $verificarService = new VerificarCadastroService($usuarioDTO);
    $usuario =  $verificarService->execute();

    try {
        $cadastrarService = new CadastrarUsuarioService($usuario);
        $cadastroExecutado = $cadastrarService->execute();
        $_SESSION['sucesso'] = "Cadastrado com sucesso!";
        header("Location: index.php");
        exit;
    } catch (TypeError $e) {
        
        $_SESSION['erro'] = "Erro verifique os dados e tente novamente";
        header("Location: Cadastrar.php");
        exit;
    }
}
