<?php
    session_start();
    include 'conexao.php';
?>

<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Carrinho </title>
    <head>

    <body>
       <section>
          <header>
             <h1 class="color-white text-center font-text-hard-two font weight-heavy link-bgcolor-black">PRODUTOS</h1>
          </header>

        <?php
             $consulta = $pdo->prepare("SELECT * FROM carrinho_produtos");
             $consulta -> execute();

             $linhas = $consulta -> rowCount();

             foreach($consulta as $amostra);
        ?>

    <article class="first bgcolor-white float-left">
       <h1 class="color-white text-center font-text-light-med font-weight-heavy bgcolor-black"><?= $amostra['produto_nome']?></h1>
       <img src="images/<?= $amostra['produto_imagem']?>"
       <div class="espaco-min"></div>
       <p class="bgcolor-gray text-center color-dark-full font-text-light-med"><s>Por: R$
       <?= number_format($amostra['produto_preco'], 2, ',', '.')?></p>

       <p class="bgcolor-red text-center btn"><a href="comprar.php?prod=<?= $amostra['produto_id']?>" class="color-white">Comprar Peça</a></p>
    </article>
    <?php endforeach; ?>
     </section>
</body>
</html>
