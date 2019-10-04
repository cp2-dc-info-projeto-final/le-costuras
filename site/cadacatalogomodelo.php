<?php
    require "conexao.php";
    function cadastracatalogo($nome, $preco, $descricao) {
        $connection = getConnection();
        $sql = "SELECT id FROM produto";
        $result = mysqli_query($connection, $sql);
        $erro = "";
        
        $sql = "INSERT INTO produto (nome, preco, descricao) VALUES
                ('$nome', '$preco', '$descricao')";
        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("Erro ao efetuar catalogo $sql. " . mysqli_error($connection));
        }
        mysqli_close($connection);
    }
?>