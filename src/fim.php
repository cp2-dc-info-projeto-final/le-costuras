<?php 
function ReceberCarrinho(){
    require_once "carrinho.php";
    $inserir = 'INSERT INTO venda (idusuario,vtotal;)
                VALUES (:idusuario, :vtotal,)';
    $consulta = $con->prepare($inserir);
    $consulta ->bindValue(':idusuario', $idusuario, PDO::PARAM_STR);
    $consulta ->bindValue(':vtotal', $vtotal, PDO::PARAM_STR);
    $consulta->execute();
    if($consulta->rowCount() == 0){
        $error_list[] = "Ocorreu algo de errado!";
    }
}
    ?>