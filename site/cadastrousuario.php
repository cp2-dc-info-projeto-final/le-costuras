<?php
    require "conexao.php";
    function cadastrausuario($nome, $email, $senha, $datanasc , $endereco) {
        $connection = getConnection();

        $sql = "SELECT id FROM usuario WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
        # password hash
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        
        if (mysqli_num_rows($result) > 0) {
            return false;
        }
        $sql = "INSERT INTO usuario (nome, email, senha, datanasc , endereco) VALUES
                ('$nome', '$email', '$hash', '$datanasc ', '$endereco')";
        if(mysqli_query($connection, $sql)){
            return true;
        } else{
            die("Erro ao efetuar cadastro $sql. " . mysqli_error($connection));
        }
        mysqli_close($connection);
    }
?>