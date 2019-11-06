<?php
    session_start();
    include 'conexao.php';

   $produto = filter_input(INPUT_GET, 'prod');

   $consulta = $pdo->prepare("SELECT * FROM carrinho_produtos WHERE produto_id = :prod");
   $consulta -> bindValue(':prod', $produto);
   $consulta -> execute();

   $linhas = $consulta -> rowCount();

   foreach($consulta as $amostra):
   endforeach;

   $rand = rand(1000,100000);
   $_SESSION ['pedido'] = $rand;
   $sessao = $_SESSION['pedido'];
   $consulta = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE temporario_ptoduto = :product AND temporario_sessao = :sessao");
   $consulta -> bindValue(':product', $produto);
   $consulta -> bindValue(':sessao', $sessao);
   $consulta -> execute();
   
   $linhas = $consulta -> rowCount();
   if($linhas >= 1):
      echo '<script>alert("Este produto já foi cadastrado anteriormente")</script>';
   else:

   endif;
?>
