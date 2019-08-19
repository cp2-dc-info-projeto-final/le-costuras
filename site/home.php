<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<link href="formulario.css" rel="stylesheet"> <!--link com o arquivo css para estilizar o site-->
<h1> LêCosturas</h1> 

<br>
<nav id="menu" inline >
        <ul>
            <li><a  href="pagina inicial.html">Home</a></li>
            <li><a href="pagina inicial.html">Catálogo</a>
                <ul> 
                    <li><a href="#">Feminino</a></li>
                    <li><a href="#">Masculino</a></li>
                    <li><a href="#">Infantil</a></li>
                    <li><a href="#">Promoções</a></li>                     
                  </ul>
              </li>
            <li><a href="#">Consertos</a></li>
            <li><a href="loginview.php">Login</a></li>
            <li><a  href="cadastroview.php">Cadastro</a></li>
            <li><a href="#">Carrinho</a></li>
        </ul>
       
    </nav>
</body>
</html>
    <?php
    session_start();
    if(array_key_exists('nome', $_SESSION) == false){
        $erro = "Acesso Negado!";        
        $_SESSION["erro"] = $erro;
        header('Location: formLogin.php');
        exit();
    } else {
        $nome = $_SESSION["nome"];
        echo "Seja bem vindo $nome!<br>";
        echo "<a href='sair.php'>Sair</a>";
    }
?>