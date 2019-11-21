
<table>
    <tr>
        <th>Produto</th>
        <th>Preco<th>
        <th>Quantidade</th>
        <th>Adicionar Peça</th>
        <th>Remover Peça</th>
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
            <td><button class="button"><a href="adicionarCarrinho.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Adicionar Peça</a> </button></td>
          <td><button class="button"><a href="tirarcarrinho.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Remover Peça</a> </button>
    </tr>
   

    
    <?php 
} }
    ?>

</table>

<button class="button"><a href="indexcarrinho.php" class="color-white">Voltar Ao Catálogo</a> </button>