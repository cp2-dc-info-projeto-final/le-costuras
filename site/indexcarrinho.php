<?php
    session_start();
    include 'conexao.php';
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Carrinho </title>
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
             <p class="text-right"><a href="carrinho.php" class="color-white bgcolor-red
             font-text-light font-weight-heavy car_show">Carrinho(<?php // $linhas ?>)</a></p><br>
             <h1 class="titulo">PRODUTOS</h1>
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
<div class="produtos">
    <article class="produtosimagens">
       <h1 class="h1"><?php echo $produto['nome']?></h1>       
       <img src="<?php echo $produto['imagem']?>">
       <div class="espaco-min"></div>
       <p class="bgcolor-gray text-center color-dark-full font-text-light-med">Por: R$
       <?php echo number_format($produto['preco'], 2, ',', '.')?></p>

       <p class="bgcolor-red text-center btn"><a href="comprar.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Comprar Peça</a>
       </p>
    </article>
      <?php } ?>
     </section>
</div>   
</body>
</html>

