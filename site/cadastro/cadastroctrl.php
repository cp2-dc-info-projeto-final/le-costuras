<?php
    
    require "cadastrousuario.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirma = $_POST["confirma"];
    session_start();
    if ($senha != $confirma) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroview.php");
        exit();
    }
    $erro = "";
    if (cadastraUsuario($nome, $email, $senha) == true) {
        session_unset();
        header("Location: ../autenticacao/loginview.php");
        exit();
    } else {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroview.php");
        exit();
    }
?>