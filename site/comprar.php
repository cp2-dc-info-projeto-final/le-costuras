<?php
    session_start();
    include 'conexaocarrinho.php';

   $produto = filter_input(INPUT_GET, 'prod');

   require_once "conexaocarrinho.php";
   $pdo = criarConexao();

   $consulta = $pdo->prepare("SELECT * FROM produto WHERE id = :prod");
   $consulta -> bindValue(':prod', $produto);
   $consulta -> execute();

   $linhas = $consulta -> rowCount();

   foreach($consulta as $mostra):
   $preco = $mostra['preco'];
   endforeach;

   $id = $mostra['id'];
   $nome = $mostra['nome'];
   $pre = $mostra['preco'];
   $rand = rand(1000,100000);

   if(!$_SESSION ['pedido']):
       $_SESSION['pedido'] = $rand;
       $sessao = $_SESSION['pedido'];
   else:
       $sessao = $_SESSION['pedido'];
   endif;

   require_once "conexaocarrinho.php";
   $pdo = criarConexao();
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
         echo '<script>window.location="carrinho.php"</script>';
        else:
         echo '<script>alert("Este produto não pôde ser adicionado ao carrinho")</script>';
         echo '<script>window.location="carrinho.php"</script>';
        endif;
   else:
     $inserir = $pdo->prepare("INSERT INTO carrinho_temporario (temporario_produto, temporario_preco,  temporario_sessao) VALUES 
     (:produto,  :preco, :sessao)");
     $inserir ->bindValue(':produto', $id);
     $inserir ->bindValue(':preco', $preco);
     $inserir ->bindValue(':sessao', $sessao);
     $inserir ->execute();

     if($inserir):
      echo '<script>alert("Produto adicionado ao carrinho")</script>';
      echo '<script>window.location="carrinho.php"</script>';
     else:
      echo '<script>alert("Este produto não pôde ser adicionado ao carrinho")</script>';
      echo '<script>window.location="carrinho.php"</script>';
     endif;
   endif;
?>