<?php 
require_once "conexao.php";
session_start();
if (isset($_SESSION["id"])) {
    $idusuario = $_SESSION["id"];
} else {
    header("Location: cadastroview.php");
}
$carrinho = $_SESSION["carrinho"];
$dataa = date ("Y-m-d");
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
            $result2 = mysqli_query($conn, $sql);
            if (!$result2){
                die(mysqli_error($conn));
            }
        }

        return true;
    } else {
        die(mysqli_error($conn));
        return false;
    }
    
}

if(FinalizarCompra($carrinho, $idusuario, $dataa, $vtotal)) {
    unset($_SESSION["carrinho"]);
    echo("Compra concluída!");
    echo("<a href='homee.php'>Voltar</a>");
}

?>