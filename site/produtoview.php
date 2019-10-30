<!DOCTYPE html>
<html lang="en" >
    <head>
    <meta charset="UTF-8">
    <link href="formulario.css" rel="stylesheet">
        <title>Catálogo</title>
       
    </head>
<body>
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
        </ul>
        
    </nav>
<br>
<br>
<form  class="forp" action="cadastroctrl.php" method= "post">
<?php
   require_once('produtoctrl.php');
    $produtos = exibirprodutos();
    foreach ($produtos as $produt) {
        
        echo "<img class='imgproduto' src='../". $produt['imagem'] . "'/>";
        echo "<h3 class='titlep'>" . $produt['nome'] . "</h3>";
        echo "<h2 class='preco'>" . $produt['preco']. "</h2>";
        echo "<p class='descricao'>"  . $produt['descricao']. "</p>";
       
 
    }
?>
</form>
</body>
</html>