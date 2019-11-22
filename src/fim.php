<?php 
require_once "conexao.php";

start_session();
$carrinho = $_SESSION["carrinho"];

function FinalizarCompra($carrinho){

    $inserir = 'INSERT INTO venda (idusuario, dataa, vtotal) VALUES ('$idusuario', '$dataa', '$vtotal');'
    if (!$consulta->execute()) {
        die(mysqli_error($con));   
    }

    $id_venda = mysqli_insert_id($con);

    foreach ($carrinho as $id_produto => $quantidade) {
                //inserir em produto venda: id_venda, id_produto, quantidade
                $inserir = 'INSERT INTO ProdutoVenda (id_produto, id_venda) VALUES ('$id_produto', '$id_venda');'
                if (!$consulta->execute()) {
                    die(mysqli_error($con));   
                }
            
                $id_venda = mysqli_insert_id($con); }
    

}
    ?>