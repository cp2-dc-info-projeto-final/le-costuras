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
             <h1 class="color-white text-center font-text-hard-two font weight-heavy 
             link-bgcolor-black">CARRINHO</h1>
          </header>

          <article class="first bgcolor-white float-left">
              <table border="1" width="800">

        <?php
             $sessao = $_SESSION['pedido'];
             $consulta = $pdo->prepare("SELECT * FROM carrinho_temporario WHERE
             temporario_sessa= :ses");
             $consulta -> bindValue(':ses', $sessao);
             $consulta -> execute();

             $total = 0;
             $linhas = $consulta -> rowCount();
             foreach($consulta as $mostra):
             $total += $mostra['temporario_preco'];

                 $prod = $mostra['temporario_produto'];
                 $consultar = $pdo->prepare("SELECT * FROM carrinho_produtos WHERE
                 produto_id =:prod");
                 $consultar -> bindValue(':prod', $prod);
                 $consultar -> execute();
                 foreach($consultar as $mostrar):
                     $produtos = $mostrar['produto_nome'];
                     $preco = $mostrar['produto_preco'];
                 endforeach;
        ?>

        <tr>
            <td class="bgcolor-gray"><p class="text-center color-dark-full font-text-light">
            <?= $produtos; ?></p>
            <input type="text" name="produto" value="<?= $produtos?>" style="display:none"
            ></td>
            <form method="post">
            <td class="bgcolor-gray"><p class="text-center color-dark-full font-text-light">
            <input type="text" value="<?= $mostrar['produto_qtde']?>" name="1" id=
            "estoque" style="display:none;">
            <input type="text" value="<?= $mostrar['produto_preco']?>" name="preco" id=
            "preco" style="display:none;">
                 
            <input type="number" name="id" value="<?= $mostra['temporario_id']?>" style 
            ="display:none;">
            <input type="number" name="qtde" value="<?= $mostra[
            'temporario_qtde']?>" class="text-center" id="qtde" onchange=
            "acrescentar()">&nbsp;<b><span id="resultado"></span></b> &nbsp;<button
            class="color-white link-bgcolor-green-dark-b" name="alterar" value="Alterar"
            >Alterar</button></p>
            
            <?php
                     if(isset($_POST['alterar'])):
                        $qtde = filter_input(INPUT_POST, 'qtde');
                        $id = filter_input(INPUT_POST, 'id');
                        $preco = filter_input(INPUT_POST, 'preco');

                        echo '<script>window.location="alterar.php?qtde='.$qtde.'$preco='.
                        $preco.'&ref='.$id.'"</script>';
                     endif;
            ?>
            </td>


      <td class="bgcolor-gray"><p class="text-center color-dark-full font´text-light">
      R$ <?= number_format($mostra['temporario_preco'], 2,',','.');?></p></td>
      <input type="text" name="preco" value="<?= $mostra['temporario_preco'] ?>" style
      ="display:none" >
      </form>

      <td clas="bgcolor-gray"><p class="text-center font-text-light"><a href=
      "excluir-produto.php?ref=<?= $mostra['temporario_id']?>" class="color-dark-full"
      >Excluir Produto</a></p></td>
      </tr> 
       
       <?php endforeach; ?>
       <tr>
           <td colspan="4" class="bgcolor-dark text-right color-white">Total da Compra: R$ 
           <?= number_format($total, 2, ',','.'); ?></td>
       </tr>
       </table>
            <td colspan="4" class="bgcolor-dark text-right color-white">
              <form method="post">
                 <button name="finalizar" value="Finalizar">Finalizar Pedido</button>

                 <?php
                   if(isset($_POST['finalizar'])):
                    $produto = $prod;
                    $qtde = $qtde;
                    $price = $preco;
                    $tot = $total;
                    $data = date('Y-m-d H:i:s');
                    $ses = $_SESSION['pedido'];

                    $inseri = $pdo->prepare("INSERT INTO carrinho_pedidos
                    (pedido_produto, pedido_qtde, pedido_preco, 
                    pedido_valor_total, pedido_data, pedido_sessao) VALUES 
                    (:product, :qt, :p, :tot, :dat, :s)");
                    $inseri -> bindValue(':product', $produto);
                    $inseri -> bindValue(':qt', $qtde);
                    $inseri -> bindValue(':p', $price);
                    $inseri -> bindValue(':tot', $tot);
                    $inseri -> bindValue(':dat', $data);
                    $inseri -> bindValue(':s', $ses);
                    $inseri -> execute();

                    if($inseri):
                        echo
                        '<script>window.location="finalizar-pedido.php"</script>';
                    else:
                        echo '<script>alert("Ocorreu um erro, não foi possivel
                        finalizar este pedido")</script>';
                        echo '<script>window.location="carrinho.php"</script>';
                    endif;

                   endif;
                   ?>
              </form>
            </td>
        
             

    </tr>
    </article>
     </section>
</body>
</html>