<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Carrinho </title>
       <link href="C:\Users\labcaxias\Desktop\electron-packager-master">
       <link href="carrinho.css" rel="stylesheet">
       <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
       <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
       <link rel="stylesheet" type="text/css" href="css2/style.css">
       <link rel="stylesheet" type="text/css" href="css2/memenu.css">
       <link rel="sortcut icon" href="logo.png" type="image/x-icon" />
       
       
    </head>

    <body>
       <section>
       <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color1" href="indexcarrinho.php">Catálogo</a></li>	
				
				<li><a  href="loginview.php">Login</a></li>	
				<?php
				session_start();
				  if (isset($_SESSION['email'])&& $_SESSION['moderador']==1){
					  ?>
				<li><a  href="paginaadmview.php">Pagina do Administrador</a></li>
				 <?php } ?>
				 <li><a  href="indexcarrinho.php">Catálogo</a></li>
				 <li><a  href="carrinho.php">Carrinho</a></li>
				<li><a  href="cadastroview.php">Cadastro</a></li>
				
				<li><a  href="sair.php">Sair</a></li>
			  </ul> 
			</div>
          <br><br>

          <section>
              <header>
                  <h1 class="titulo">CARRINHO</h1>
              </header>
          </section>


<table>
    <tr>
        <th>Produto</th>
        <th>Preco</th>
        <th>Quantidade</th>
        <th>Adicionar Unidade</th>
        <th>Remover Unidade</th>

        
    </tr>


<?php
        
    include 'conexaocarrinho.php';
    $pdo = criarConexao();
    if(count($_SESSION['carrinho']) == 0){
        echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';}
    
    
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
            <td><a style="color: black" href="adicionarCarrinho.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Adicionar Peça</a></td>
          <td><a style="color: black" href="tirarcarrinho.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Remover Peça</a></td>
    </tr>
   

    
    <?php 
} }
    ?>

</table>
<br><br>

<button class="linkback"><a style="color: black" href="indexcarrinho.php" class="color-white">Voltar Ao Catálogo</a> </button>


</body>
</html>
