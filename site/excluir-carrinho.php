<?php
    
    session_start();
    include 'conexaocarrinho.php';

    $id = filtetr_input(INPUT_GET, 'ref');

    $deletar = $pdo->prepare("DELETE FROM carrinho_temporario WHERE temporario_id = :id");
    $deletar -> bindValue(':id', $id);
    $deletar -> execute();

    if($deletar):
        echo '<script>alert("Produto deletado com sucesso")</script>';
        echo '<script>window.location="carrinho.php"</script>';
    else:
        echo '<script>alert("Este produto não pôde ser deletado")</script>';
        echo '<script>window.location="carrinho.php"</script>';
    endif;
?>