<?php
    
    require "cadastromodelo.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirma = $_POST["confirma"];
    $endereco = $_POST["endereco"];
    session_start();
    session_start();
if ($senha != $confirma) {    
    $erro = "<p style='color:red;'>As senhas não coincidem</p>";        
    $_SESSION["erro"] = $erro;
    header("Location:cadastroview.php");
    exit();
}
if (Cadastra_Usuario($nome, $email, $senha, $confirma, $endereco)==true){
    session_unset();
    header("Location:loginview.php");
} else {
    $erro="<p style='color:red;'>E-mail indisponível</p>";
    $_SESSION["erro"]= $erro;
    header ("Location:cadastroview.php");
}