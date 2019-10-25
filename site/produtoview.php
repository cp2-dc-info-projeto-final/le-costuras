<!DOCTYPE html>
<html lang="en" >
    <head>
    <meta charset="UTF-8">
        <title>Catálogo</title>
       
    </head>
<body>

<?php
   require_once('produtoctrl.php');
    $produtos = exibirprodutos();
    foreach ($produtos as $produt) {
        echo "<h2>" . $imagem ['imagem'] . "</h2>";
        echo "<h3>" . $produt['nome'] . "</h3>";
        echo "<h2>" . $produt['preco']. "</h2>";
        echo "<p>"  . $produt['descricao']. "</p>";
        
      
 
    }
?>
</body>
</html>