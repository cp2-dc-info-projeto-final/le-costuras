<!DOCTYPE html>
<html lang="en" >
    <head>
    <meta charset="UTF-8">
        <title>Masculino</title>
       
    </head>
<body>

<?php
   require_once('masculinoctrl.php');
    $produtos = exibirprodutos();
    foreach ($produtos as $produt) {
        echo "<h3>" . $produt['nome'] . "</h3>";
        echo "<h2>" . $produt['preco']. "</h2>";
        echo "<p>".   $produt['descricao']. "</p>";
      
 
    }
?>
</body>
</html>