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
                <ul>
                        <li><a href="femininioview.php">Feminino</a></li>
                        <li><a href="maculinoview.php">Masculino</a></li>
                        <li><a href="infantilview.php">Infantil</a></li>
                        <li><a href="#">Promoções</a></li>                    
                  </ul>
              </li>
            <li><a href="loginview.php">Login</a></li>
            <li><a  href="cadastroview.php">Cadastro</a></li>
            <li><a href="#">Carrinho</a></li>
        </ul>
        
</body>
</html>
    <?php
    session_start();
    if(array_key_exists('nome', $_SESSION) == false){
        $erro = "Acesso Negado!";        
        $_SESSION["erro"] = $erro;
        header('Location: loginview.php');
        exit();
    } else {
        $nome = $_SESSION["nome"];
        echo "Seja bem vindo $nome!<br>";
        echo "<a href='sair.php'>Sair</a>";
    }
?>