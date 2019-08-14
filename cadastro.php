<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $senha = $_POST["senha"];
    $confirma = $_POST["confirma"];
    $nascimento = $_POST["data"];
    
    session_start();
    if ($senha != $confirmaSenha) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastro.php");
        exit();
    }
    # password hash
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost", "root", "", "cadastro.php");
 
    // Check connection
    if($connection === false){
        die("Não foi possível efetuar cadastro" . mysqli_connect_error());
    }
    $sql = "SELECT id FROM usuario WHERE usuario_email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        $erro = "E-mail indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastro.php");
        exit();
    }
    $sql = "INSERT INTO usuario (usuario_nome, usuario_email, usuario_senha) VALUES
            ('$nome', '$email', '$hash')";
    if(mysqli_query($connection, $sql)){
        session_unset();
        header("Location: login.php");
        exit();
    } else{
        die("Não foi possível efetuar cadastro. $sql. " . mysqli_error($connection));
    }
    mysqli_close($connection);
?>