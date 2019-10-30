<?php
    session_start();
    include 'conexao.php';

   $produto = filter_input(INPUT_GET, 'prod');

   $consulta = $pdo->prepare("SELECT * FROM carrinho_produtos WHERE produto_id = :prod");
   $consulta -> bindValue(':prod', $produto);
   $consulta -> execute();

   $linhas = $consulta -> rowCount();

   foreach($consulta as $mostra):
   $pre = $mostra['produto_preco'];
   endforeach;

   $produto_id = $mostra['produto_id'];
   $produto_nome = $mostra['produto_nome']
   $produto_qtde = 1;
   $produto_preco = $mostra['produto_preco'];
   $produto_data = date('Y-m-d H:i:s');

   $rand = rand(1000,100000);

   if(!$_SESSION ['pedido']):
       $_SESSION['pedido'] = $rand;
       $sessao = $_SESSION['pedido'];
   else:
       $sessao = $_SESSION['pedido'];
   endif;

   $consulta = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE temporario_produto = 
   :product AND temporario_sessao = :sessao");
   $consulta -> bindValue(':product', $produto);
   $consulta -> bindValue(':sessao', $sessao);
   $consulta -> execute();
   
   $linhas = $consulta -> rowCount();
   foreach($consulta as $mostra):
      $qtde = $mostra['temporario_qtde'];

   endforeach;
   if($linhas >= 1):
      $valor = $qtde + 1;
      $preco = $valor * $pre;
      $altera = $pdo->prepare("UPDATE carrinho_temporario SET temporario_qtde = :val,
      temporario_preco = :pre WHERE temporario_sessao = :ses AND temporario_produto = :tp ");
      $altera -> bindValue(':val', $valor);
      $altera -> bindValue(':ses', $sessao);
      $altera -> bindValue(':pre', $preco);
      $altera -> bindValue(':tp', $produto);
      $altera -> execute();
      if($altera):
         echo '<script>alert("Produto adicionado ao carrinho")</script>';
         echo '<script>window.location="indexcarrinho.php"</script>';
        else:
         echo '<script>alert("Este produto não pôde ser adicionado ao carrinho")</script>';
         echo '<script>window.location="indexcarrinho.php"</script>';
        endif;
   else:
     $inserir = $pdo->prepare("INSERT INTO carrinho_temporario (temporario_produto,
     temporario_qtde, temporario_preco, temporario_data, temporario_sessao) VALUES 
     (:produto, :qtde, :preco, :data, :sessao)");
     $inserir ->bindValue(':produto', $produto_id);
     $inserir ->bindValue(':qtde', $produto_qtde);
     $inserir ->bindValue(':preco', $produto_preco);
     $inserir ->bindValue(':data', $produto_data);
     $inserir ->bindValue(':sessao', $sessao);
     $inserir ->execute();

     if($inserir):
      echo '<script>alert("Produto adicionado ao carrinho")</script>';
      echo '<script>window.location="indexcarrinho.php"</script>';
     else:
      echo '<script>alert("Este produto não pôde ser adicionado ao carrinho")</script>';
      echo '<script>window.location="indexcarrinho.php"</script>';
     endif;
   endif;
?>