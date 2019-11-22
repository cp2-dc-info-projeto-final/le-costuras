<?php 
require_once "conexao.php";
session_start();
$carrinho = $_SESSION["carrinho"];
$idusuario = $_SESSION["id"];
$dataa = date ("Y/m/d");
$vtotal = $_SESSION["vtotal"];


function FinalizarCompra($carrinho, $idusuario, $dataa, $vtotal){
    $conn = get_connection();
    $sql = "INSERT INTO venda (idusuario, dataa, vtotal) VALUES ($idusuario, '$dataa', $vtotal)";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $id_venda = mysqli_insert_id($conn);

        foreach ($carrinho as $id_produto => $quantidade) {
            //inserir em produto venda: id_venda, id_produto, quantidade
            $sql = "INSERT INTO ProdutoVenda (id_produto, id_venda, qtd) VALUES ($id_produto, $id_venda, $quantidade)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location:homee.php");
                
            } else {
                die(mysqli_error($conn));
            }   
        }
    } else {
        die(mysqli_error($conn));
    }    
}

FinalizarCompra($carrinho, $idusuario, $dataa, $vtotal);

?>