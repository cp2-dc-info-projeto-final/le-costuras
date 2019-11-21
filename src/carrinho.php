
<table>
    <tr>
        <th>Produto</th>
        <th>Preco<th>
        <th>Quantidade</th>
    </tr>


<?php
        session_start();
    include 'conexaocarrinho.php';
    $pdo = criarConexao();
    
    
    $consulta = $pdo->prepare("SELECT * FROM produto");
    $consulta->execute();
    if ($consulta) {
         
        $produtos = $consulta -> fetchAll();
        
   } else {
      die($pdo->errorInfo());
   }
   
   foreach($_SESSION["carrinho"] as $id => $qtd)
   foreach($produtos as $produto){
    if($produto['id'] == $id){
?>

    <tr>
    <td> <?php 
    
    echo $produto['nome']?></td>
            <td> R$ <?php echo number_format ($produto['preco'], 2, ',', '.')?></td>
            <td> <?php echo $qtd; ?></td>
    </tr>
    
    <?php 
} }
    ?>

</table>