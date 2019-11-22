<?php
if(!isset($_SESSION["login"])){
    header('Location:loginview.php');
    exit();
  } 
function AdicionaPedido($vtotal,$idusuario,$carrinho);{
    $error_list = [];
    if(is_null($carrinho)){
        $error_list[] = "Carrinho Vazio";
    }
    
    $con = conexaocarrinho();
    $inserir = 'INSERT INTO venda (idusuario,vtotal;)
                VALUES (:idusuario, :vtotal,)';
    $consulta = $con->prepare($inserir);
    $consulta ->bindValue(':idusuario', $idusuario, PDO::PARAM_STR);
    $consulta ->bindValue(':vtotal', $vtotal, PDO::PARAM_STR);
    $consulta->execute();
    if($consulta->rowCount() == 0){
        $error_list[] = "Ocorreu algo de errado!";
    }
    $PedidoId = $con->lastInsertId();
    foreach ($carrinho as $item){
        $ProdutoPedido = AdicionaProdutoPedido($item['id'],$PedidoId,$item['quantidade']);
        if(!$ProdutoPedido){
            $error_list[] = "Ocorreu algo de errado!";
        }
    }
    if (!empty($error_list)) {
        throw new Exception(implode('|', $error_list));
    }
}
function AdicionaProdutoPedido($id_produto,$id_venda,$qtd){
    $con = CriarConexao();
    $inserir = 'INSERT INTO produtopedido (id_produto,id_venda,qtd)
                VALUES (:id_produto,:id_venda,:qtd)';
    $consulta = $con->prepare($inserir);
    $consulta ->bindValue(':id_produto', $id_produto);
    $consulta ->bindValue(':id_venda', $id_venda);
    $consulta ->bindValue(':qtd', $qtd);
    $consulta->execute();
    if($consulta->rowCount() > 0){
        return true;
    }
    else{
        return false;
    }
}
?>