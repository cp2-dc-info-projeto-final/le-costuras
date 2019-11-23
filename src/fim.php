<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Carrinho </title>
       <link href="C:\Users\labcaxias\Desktop\electron-packager-master">
       <link href="fim.css" rel="stylesheet">
       <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
       <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
       <link rel="stylesheet" type="text/css" href="css2/style.css">
       <link rel="stylesheet" type="text/css" href="css2/memenu.css">
       <link rel="sortcut icon" href="logo.png" type="image/x-icon" />
       
       
    </head>
    
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
    unset($_SESSION["carrinho"]); ?>
     <div class="h1">
    <center>
    <h1>Sua compra foi realizada com sucesso!</h1>
    </center>
    <button class="linkback"><a style="color: black" href="indexcarrinho.php">Voltar</a></button>
<?php }

?>
</body>
</html>