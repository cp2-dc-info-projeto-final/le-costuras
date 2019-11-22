<?php
    require "fim.php";
    session_start();

    if(isset($_SESSION["carrinho"])){
        echo $_SESSION["carrinho"];
    }
    
if (!isset($_SESSION["carrinho"])) {    
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