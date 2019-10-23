<?php
    session_start();
    include 'conexao.php';


    $id = filter_input(INPUT_GET, 'ref');
    $preco = filter_input(INPUT_GER, 'preco');
    $qtde = filter_input(INPUT_GER, 'qtde');

    $consulta = $pde->prepare("SELECT * FROM carrinho_temporario WHERE temporario_id = :id");
    $consulta -> bindValue(':id', $id);
    $consulta -> execute();

    $valor = $preco * $qtde;

    $altera = $pdo->prepare("UPDATE carrinho_temporario SET temporario_qtde = :val,
    temporario_preco = :preco WHERE temporario_id= :tp");
    $altera -> bindValue(':val', $qtde);
    $altera -> bindValue(':preco', $valor);
    $altera -> bindValue(':tp', $id);
    $altera -> execute();
    if($altera):
        echo '<script>alert("A quantidade do produto foi alterada")</script>';
        echo '<script>window.location="carrinho.php"</script>';
    endif;
?>