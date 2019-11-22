<?php
session_start();
function ReceberCarrinho(){
  require_once "carrinho.php";
}
function FecharCompra($request) {
  if(!isset($_SESSION["login"])){
    header('Location: finalizarview.php?erros='.urlencode("O login precisa ser efetuado para finalizar o pedido"));
    exit();
  }
  else{
    $login = $_SESSION["login"];
  }
  
  require_once("finalizarmodel.php");
  
  
  $dados = Pegardados($login);
  $carrinho = ReceberCarrinho();
  $idusuario= $dados['id'];
  $vtotal= 0;
  $datahora = date('Y-m-d H:i:s');
  foreach ($carrinho as $item) {
    $precoTotal += $item['preco'] * $item['quantidade'];
  }
  
  try {
    $resultPedido = AdicionaPedido($vtotal,$idusuario,$carrinho); 
  }
  catch (Exception $e) {
    $erros = $e->getMessage();
  }
  if ($erros == "") {      
    header('Location: finalizado.php?formaPag=');
    exit();
  }
  else {
        header('Location: loginview.php');
        exit();
  }
}
if (!empty($_POST)) {
  FecharCompra($_POST);
}
?>