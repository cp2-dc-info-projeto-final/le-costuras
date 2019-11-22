
     
  </nav>
 
  <div class="container" style="margin-top: 150px">
  <div class="shadow p-3 mb-5 bg-white rounded">
  

  <?php
      if (isset($_REQUEST['erros'])) {
        $erros = $_REQUEST['erros'];
        foreach (explode("|", $erros) as $erros_item) {
          ?>
          <div class="alert alert-danger" role="alert">
          <?php
          print($erros_item . ".");
          ?>
          </div>
          <?php
        }
      }
      
    ?>
    
  <?php 
    require_once("finalizarctrl.php");
    $url = $_SERVER["REQUEST_URI"];
    $_SESSION['url'] = $url;
    $carrinho = ReceberCarrinho();
    if(count($carrinho) == null){
      echo 'Carrinho vazio';
      header('Location: indexcarrinho.php');
      exit();
    }
    else{
      echo '<div class="row">
      <div class="col"><b>Produto</b></div>
      <div class="col"><b>Descrição</b></div>
      <div class="col"><b>Preço</b></div>
      <div class="col"><b>Tamanho</b></div>
      <div class="col"></div>
      </div><hr>';
      foreach ($carrinho as $item) {
        echo '<div class="row">
        <div class="col">'.$item['nome'].'</div>
        <div class="col">'.$item['descricao'].'</div>
        <div class="col">R$ '.$item['preco'].'</div>
        <div class="col">&nbsp;&nbsp;
        <a href="carrinho.php?id='.$item['id'].'&nome='.$item['nome'].'&preco='.$item['preco'].'&descricao='.$item['descricao'].'&op=1">+</a>
        '.$item['qtd'].'
        <a href="adicionarCarrinho.php?id='.$item['id'].'&nome='.$item['nome'].'&preco='.$item['preco'].'&descricao='.$item['descricao'].'&op=2">-</a>
        </div>
        <div class="col"><a  class="btn btn-info" href="../Inicial/RemoverCarrinhoCtrl.php?id='.$item['id'].'&tamanho='.$item['tamanho'].'">Remover</a></div>
        </div> <hr>';
      }
    }
    ?>
    <br>
    <form id="Pedido" method="POST" action="finalizarctrl.php">
    <h2>Informações do Pedido</h2>
    <hr>
    <div class="form-group">
    <input type ="submit" name ="FinalizarPedido" value ="FinalizarPedido" class="btn btn-danger">
    </form>

  </div>
  </div>
  