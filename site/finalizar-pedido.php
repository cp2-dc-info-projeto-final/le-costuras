<?php
    session_start();
    include 'conexaocarrinho.php';

        $total = filter_input(INPUT_GET, 'total');
        $sessao = $_SESSION['pedido'];
        $consulta = $pdo-> prepare("SELECT * FROM carrinho_temporario WHERE temporario_sessao =
        :ses");
        $consulta -> bindValue(':ses', $sessao);
        $consulta -> execute();
        $linhas = $consulta -> rowCount();

        foreach($consulta as $mostra):
        $produto_id = $mostra['temporario_produto'];
        $produto_qtde = $mostra['temporario_qtde'];
        $produto_preco = $mostra['temporario_preco'];
        $produto_data = date('Y-m-d H:i:s');

        $inserir = $pdo->prepare("INSERT INTO carrinho_pedidos (pedido_id,
        pedido_preco, pedido_qtde, pedido_valor_total, pedido_data, pedido_sessao) VALUES
        ('$produto_id', '$produto_qtde', '$produto_preco', '$total, '$produto_data', '$sessao
        ')");
        $inserir ->execute();
        endforeach;
        if (!$_SESSION['logado']):
            echo '<script>window.location="finalizarview.php"</script>';
        else:
            echo '<script>window.location="cadastroview.php"</script>';
        endif;
?>

