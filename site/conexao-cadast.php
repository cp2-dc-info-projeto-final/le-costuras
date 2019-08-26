<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $senha = $_POST["senha"];
    $confirma = $_POST["confirma"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    
    echo = "$nome";


    $link = mysqli_connect("localhost", "root", "", "bdusuario");
 
    // Check connection
    if($link === false){
        die("Nâo foi possível executar o cadastro." . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuario (nome, email, senha, data, cpf, endereco, comfirma) VALUES
            ('$nome', '$email', '$data', '$senha', '$confirma', '$cpf', '$endereco')";
    if(mysqli_query($link, $sql)){
        echo "Cadastro Concluído";
    } else{
        echo "Não foi possível concluir o cadastro $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>