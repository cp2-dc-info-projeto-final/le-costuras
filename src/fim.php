<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Check Out </title>
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
        <th>Subtotal</th>

        
    </tr>



<?php


try {
  $conn = new PDO('mysql:host=localhost;dbname=lecosturas', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
   
   $vtotal = 0;
   $idprod = "";
   $prodqnt = 0;
   $subtotal = 0;
   $idusuario = $_SESSION['id'];
   #echo $idusuario;
      
   foreach($_SESSION['carrinho'] as $idd => $qtd)
   foreach($produtos as $produto){
    if($produto['id'] == $idd){
        $idprod = $idd;
        $prodqnt = $qtd;

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
         <td> R$ <?php $subtotal = $produto['preco']*$qtd;
          echo number_format ($subtotal, 2, ',', '.')?>


    </tr>
   

    
    <?php 
 $vtotal += $subtotal;
 #echo $vtotal;
 
    }
}
    #$idusuario = $_SESSION['id'];
    $stmt = $conn->prepare('INSERT INTO venda(idusuario, vtotal) VALUES(:usuario,:total)');
    $stmt->execute(array(
        ':usuario' => $idusuario,
        ':total' => $vtotal
      ));
      echo $stmt->rowCount();
      #echo $idusuario;
      echo $vtotal;
    #while($row = $stmt->fetch()) {
       # print_r($row);
    #}

    $sql = "SELECT MAX(id) FROM venda;";
    $statement = $conn->prepare($sql);
    $statement->execute(); // no need to add `$sql` here, you can take that out
    $item_id = $statement->fetchColumn();
    echo $item_id;

    
    #print($_GET[id]);
    #print($_GET[vtotal]);
    #print($_GET[idprod]);
    #print($_GET[qnt]);
    #print($row1);
    

?>

</table>
<br><br>

<button class="linkback"><a style="color: black" href="indexcarrinho.php" class="color-white">Voltar Ao Catálogo</a> </button>


<button class="button"><a href="">Limpar Carrinho</a></button>
<button class="button"><a href="fim.php" >Finalizar Compra</a></button>

<?php 
echo number_format ($vtotal, 2, ',', '.')
 ?>

</body>
</html>

