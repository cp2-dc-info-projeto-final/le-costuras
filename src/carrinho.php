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
                 <li><a  href="carrinho.php">Carrinho</a></li>
				 <?php
				 if(isset($_SESSION['email']) != true){
					 ?>
				 <li><a  href="loginview.php">Login</a></li>	
				<li><a  href="cadastroview.php">Cadastro</a></li>
				<?php
				 }
				 ?>
				<?php
				if(isset($_SESSION['email']) && $_SESSION['email']=true){ ?>
				<li><a  href="sair.php">Sair</a></li>
				<?php
				}
				?>
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
      if (isset($_SESSION["id"])) {
        $idusuario = $_SESSION["id"];
    } else {
        $erro= "<p style='color:red;'>É preciso ser cadastrado e estar logado para acessar o carrinho e finalizar uma compra.</p>";
        $_SESSION["erro"]=$erro;
        header("Location: cadastroview.php");
    }
      if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = [];
    }

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
   $vtotal = 0;
   $idprod = "";
   $prodqnt = 0;
   $subtotal = 0;

   foreach($_SESSION["carrinho"] as $id => $qtd)
   foreach($produtos as $produto){
    if($produto['id'] == $id){
        $idprod = $id;
        $prodqnt = $qtd;

?>

    <tr>
    <td> <?php echo $produto['nome']?></td>
            <td> R$ <?php echo number_format ($produto['preco'], 2, ',', '.')?></td>
            <td> <?php echo $qtd; ?></td>
            <td><a style="color: black" href="adicionarCarrinho2.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Adicionar Peça</a></td>
          <td><a style="color: black" href="tirarcarrinho.php?prod=<?php 
         echo $produto['id']?>" class="color-white">Remover Peça</a></td>
         <td> R$ <?php $subtotal = $produto['preco']*$qtd;
          echo number_format ($subtotal, 2, ',', '.');?>


    </tr>
   

    
    <?php 
 $vtotal =($vtotal += $subtotal) ;
 } } 

 $_SESSION["vtotal"] = $vtotal + 15;
 ?>
 
 

<?php
function buscarusuario() {
    require_once "conexao.php";
   $conn=get_connection();
   if ($conn===false){
       die("Erro de conexão".mysqli_connect_error());
   }
   $sql = "SELECT * from usuario where   id = ". $_SESSION["id"]; 
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQL_ASSOC);
 }
 $usuarios = buscarusuario();

 foreach($usuarios as $usuario) {

?>

    <div>
     
        <tr>
                <th> Cliente </th>
                <th> E-Mail </th>
                <th> Endereço </th>
                <th> Valor total</th>
            </tr>
            <tr>
            <td> <?php echo $usuario["nome"]; ?> </td>
            <td> <?php echo $usuario["email"]; ?> </td>
            <td> <?php echo $usuario["endereco"]; ?> </td>
            <td> R$ <?php echo number_format ($_SESSION["vtotal"], 2, ',', '.'); ?> </td>
  <?php
                }    
            ?>
            </table>
            <br><br>
<div class="h1">
<center>
<h1>Sua encomenda levará de 15 a 30 dias após feito o depósito do valor da compra para chegar no endereço cadastrado.</h1>
</center>
</div>
<div class="h1" >
<center>
<h2>É adicionado o valor de R$15,00, referente ao frete, ao valor total.</h2>
</center>
</div>
<div class="h1" >
<center>
<h2>O depósito deve ser feito em um prazo de três dias úteis, na conta 12345-5, agencia 012(Caixa Econômica). </h2>
</center>
</div>
<div class="h1" >
<center>
<h2>A entrega será feita no endereço cadastrado.</h2>
</center>
</div>
<div class="h1" >
<center>
<h2>Qualquer dúvida entre em contato através do email lecosturas@gmail.com.</h2>
</center>
</div>



<br><br>

<button class="linkback"><a style="color: black" href="indexcarrinho.php" class="color-white">Voltar Ao Catálogo</a> </button>


<button class="linkback"><a style="color: black" href="limparcarrinho.php">Limpar Carrinho</a></button>
<button class="linkback"><a style="color: black" href="fim.php" >Finalizar Compra</a></button>
<br><br>

</body>
</html>




