<?php
require_once('../src/Service/ValidaUsuarioService.php');
require_once('../src/Service/VerificarUsuarioValidoService.php');
require_once('../model/UsuarioDTO.php');

if (isset($_POST['acao'])) {
    $nome = $_POST['login'];
    $senha = $_POST['password'];
    $usuarioValidoDTO = new UsuarioDTO(
        '',
        $senha,
        $nome,
        '',
    );

    $verificaService = new VerficarUsuarioValidoService($usuarioValidoDTO);
    $usuario = $verificaService->execute();

    try {
        $validarUsuario = new ValidaUsuarioService($usuario);
        $usuarioValido = $validarUsuario->execute();

        if ($usuarioValido === false) {

            $_SESSION['erro'] = "Erro ao validar o usuário";
            header("Location: ../index.php");
            exit;
        } else {
            header("Location: Site.php");
            exit;
        }
    } catch (TypeError $e) {

        header("Location: ../index.php");
        $_SESSION['erro'] = "Usuário ou senha inválidos";
        exit;
    }
}
