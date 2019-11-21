<?php
    session_start();
    include 'conexaocarrinho.php';
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Catálogo </title>
       <link href="C:\Users\labcaxias\Desktop\electron-packager-master">
       <link href="indexcarrinho.css" rel="stylesheet">
       <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
       <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
       <link rel="stylesheet" type="text/css" href="css/util.css">
       <link rel="stylesheet" type="text/css" href="css/main.css">
       <link rel="sortcut icon" href="logo.png" type="image/x-icon" />
       
       
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
             
         */?>

             <h1 class="titulo">PRODUTOS</h1>
             <p class="text-right"><a href="carrinho.php" >
             <button class="button">Carrinho</button></a></p><br>
             
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

 <form class="cent">
<div class="produtos">
    <article class="produtosimagens">
       <h1 class="h1"><?php echo $produto['nome']?></h1>       
       <img src="<?php echo $produto['imagem']?>">
       <div class="espaco-min"></div>
       <p class="preco">R$        
       <?php echo number_format($produto['preco'], 2, ',', '.')?></p>
       <br>
       <p class="text-right"><button class="button"><a style="color: black" href="adicionarCarrinho.php?prod=<?php 
         echo $produto['id']?>" >ADICIONAR AO CARRINHO</a> </button>
    </article>
      <?php } ?>
     </section>
</div>   
<div class="container body-content">
       <footer class="fixarRodape">
        <hr />
        <p>LêCosturas</p>
    </footer>
</div>

 </form>
            
</body>
</html>