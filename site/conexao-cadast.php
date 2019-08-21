<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $data = $_POST["data"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $senha2 = $_POST["senha2"];
    echo = "$nome";


    $link = mysqli_connect("localhost", "root", "", "bdusuario");
 
    // Check connection
    if($link === false){
        die("Nâo foi possível executar o cadastro." . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuario (nome, email, senha, data, cpf, endereco, senha2) VALUES
            ('$nome', '$email', '$senha', '$data', '$cpf', '$endereco' ,'$senha2')";
    if(mysqli_query($link, $sql)){
        echo "Cadastro Concluído";
    } else{
        echo "Não foi possível concluir o cadastro $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>