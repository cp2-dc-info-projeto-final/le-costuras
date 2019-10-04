<?php
    
    require "cadastromodelo.php";
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    session_start();
    if (cadastraproduto() == true) {
        session_unset();
        header("Location: cadacatalogoview.php");
        exit();

?>