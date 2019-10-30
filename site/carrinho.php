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
             $valor = $mostra['temporario_qtde'] * $mostra['temporario_preco'];  ççççç

                 $prod = $mostra['temporario_produto'];
                 $consultar = $pdo->prepare("SELECT * FROM carrinho_produtos WHERE
                 produto_id =:prod");
                 $consultar -> bindValue(':prod', $prod);
                 $consultar -> execute();
                 foreach($consultar as $mostrar):
                     $produtos = $mostrar['produto_nome'];
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
       
       <?php endforeach; endforeach; ?>
       <tr>
           <td colspan="4" class="bgcolor-dark text-right color-white">Total da Compra: R$ 
           <?= number_format($total, 2, ',','.'); ?></td>
       </tr>
       </table>
           <p class="bgcolor-red text-center btn"><a href="finalizar-pedido.php?ref=<?= 
           $mostra['temporario_sessao']?>" class="color-white">Comprar Peça</a></p>
    </article>
     </section>
</body>
</html>