<?php
    
    require "cadastrousuario.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $senha = $_POST["senha"];
    $confirma = $_POST["confirma"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    session_start();
    if ($senha != $confirma) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroview.php");
        exit();
    }
    $erro = "";
    if (cadastraUsuario($nome, $email, $data, $senha, $confirma, $cpf, $endereco) == true) {
        session_unset();
        header("Location: loginview.php");
        exit();
    } else {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroview.php");
        exit();
    }
?>