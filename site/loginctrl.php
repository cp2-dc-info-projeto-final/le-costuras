<?php
    require "loginmodelo.php";
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    session_start();
    if (logar($email, $senha) == true) {
        session_unset();
        $_SESSION["nome"] = $row["nome"];
        header("Location: ../index.html");
        exit();
    }
    else {
        $erro = "Login ou senha incorretos";
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();
    }
?>