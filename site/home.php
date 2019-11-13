<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LêCosturas</title>
</head>
<body>
<link href="formulario.css" rel="stylesheet"> <!--link com o arquivo css para estilizar o site-->
<h1> LêCosturas</h1> 

<br>
<nav id="menu" inline >
        <ul>
        <li><a  href="home.php">Home</a></li>
            <li><a href="">Catálogo</a>

              </li>
            <li><a href="loginview.php">Login</a></li>
            <li><a  href="cadastroview.php">Cadastro</a></li>
            <li><a href="#">Carrinho</a></li>
            <li><a href="paginaadmview.php">Administrador</a></li>
        </ul>
        
</body>
</html>
    <?php
    session_start();
    if(array_key_exists('email', $_SESSION) == false){
        $erro = "Acesso Negado!";        
        $_SESSION["erro"] = $erro;
        header('Location: loginview.php');
        exit();
    } else {
        $email = $_SESSION["email"];
        echo "Seja bem vindo $email!<br>";
        echo "<a href='sair.php'>Sair</a>";
    }
?>