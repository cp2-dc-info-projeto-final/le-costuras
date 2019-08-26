<?php
    
    require "cadastrousuario.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $datanasc  = $_POST["datanasc"];
    $confirma = $_POST["confirma"];
    $endereco = $_POST["endereco"];
    session_start();
    if ($senha != $confirma) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroview.php");
        exit();
    }
    $erro = "";
    if (cadastraUsuario($nome, $email,  $senha, $datanasc , $endereco) == true) {
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