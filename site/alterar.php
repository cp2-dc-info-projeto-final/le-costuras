<?php
     session_start();
     include 'conexaocarrinho.php';

     $id = filter_input(INPUT_GET, 'ref');
     $preco = filter_input(INPUT_GET, 'preco');
     $qtde = filter_input(INPUT_GET, 'qtde');

     $consulta = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE temporario_id = :id");
     $consulta -> bindValue(':id', $id);
     $consulta -> execute();

     $valor = $preco * $qtde;

     if($qtde <= 0):
         $deletar = $pdo->prepare("DELETE FROM carrinho_temporario WHERE temporario_id = :id");
         $deletar -> bindValue(':id', $id);
         $deletar -> execute();

         if($deletar):
            echo '<script>alert("Produto deletado com sucesso")</script>';
            echo '<script>window.location="carrinho.php"</script>';
         else:
            echo '<script>alert("Este produto não pôde ser deletado")</script>';
            echo '<script>window.location="carrinho.php"</script>';
         endif;
     else:

          $altera = $pdo->prepare("UPDATE carrinho_temporario SET temporario_quantidade = :val,
          temporario_preco = :preco WHERE temporario_id= :tp ");
          $altera -> bindValue(':val', $qtde);
          $altera -> bindValue(':preco', $valor);
          $altera -> bindValue(':tp', $id);
          $altera -> excute();
          if($altera):
              echo '<script>alert("+1 peça adicionada")</script>';
              echo '<script>window.location="carrinho.php"</script>';
          else:
              echo '<script>alert("Este produto não pôde ser adicionado ao carrinho")</script>';
              echo '<script>window.location="carrinho.php"</script>';
          endif;

   endif;
?>