<?php
    session_start();
    include 'conexaocarrinho.php';
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Carrinho </title>
       <link href="C:\Users\labcaxias\Desktop\electron-packager-master">
       <link href="indexcarrinho.css" rel="stylesheet">
    </head>

    <body>
       <section>
          <header>
          <?php
          /*
             $sessao = $_SESSION['pedido'];
             $consulta = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE
             temporario_sessa= :ses");
             $consulta -> bindValue(':ses', $sessao);
             $consulta -> execute();
             $linhas = $consulta -> rowCount();
             */
             ?>
             <h1 class="titulo">PRODUTOS</h1>
             <p class="text-right"><a href="carrinho.php" class="color-white bgcolor-red
             font-text-light font-weight-heavy car_show">
             <div class="button">
             <button type="submit" >Carrinho</button></a></p><br>
             
          </header>

        <?php
             require_once "conexaocarrinho.php";
             $pdo = criarConexao();
                          
             $consulta = $pdo->prepare("SELECT * FROM produto");
             $consulta->execute();

             if ($consulta) {
         
                  $produtos = $consulta -> fetchAll();
                  
                  $linhas = $consulta -> rowCount();
                  echo $linhas;

             } else {
                die($pdo->errorInfo());
             }
             
             foreach($produtos as $produto) {
        ?>

 <form class="cent"       
<div class="produto">
    <article class="produtosimagens">
       <h1 class="h1"><?php echo $produto['nome']?></h1>       
       <img src="<?php echo $produto['imagem']?>">
       <div class="espaco-min"></div>
       <p class="preco">R$        
       <?php echo number_format($produto['preco'], 2, ',', '.')?></p>
       <button class="button"><a href="comprar.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Comprar Peça</a> </button>
    </article>
      <?php } ?>
     </section>
</div>   
 </form>
            
</body>
</html>

