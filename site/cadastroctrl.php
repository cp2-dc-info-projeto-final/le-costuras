<?php
    
    require "cadastromodelo.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];
    $confirma = $_POST["confirma"];
    session_start();
    
if ($senha != $confirma) {    
    $erro = "<p style='color:red;'>As senhas não coincidem</p>";        
    $_SESSION["erro"] = $erro;
    header("Location:cadastroview.php");
    exit();
}
if (cadastrausuario($nome, $email, $endereco, $senha, $confirma )==true){
    session_unset();
    header("Location:loginview.php");
} else {
    $erro="<p style='color:red;'>E-mail indisponível</p>";
    $_SESSION["erro"]= $erro;
    header ("Location:cadastroview.php");
}