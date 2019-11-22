<!doctype html>
<html lang="pt-br">
    <head>
       <meta charset="utf-8">
       <title> Encomendas </title>
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
    <section class="menusuperior">
       <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color1" href="indexcarrinho.php">Catálogo</a></li>	
				
				<li><a  href="loginview.php">Login</a></li>	
				<?php
				  if (isset($_SESSION['email'])&& $_SESSION['moderador']==1){
					  ?>
				<li><a  href="paginaadmview.php">Pagina do Administrador</a></li>
				 <?php } ?>
				 <li><a  href="homee.php">Home</a></li>
				 <li><a  href="carrinho.php">Carrinho</a></li>
				<li><a  href="cadastroview.php">Cadastro</a></li>
				<li><a  href="sair.php">Sair</a></li>
			  </ul> 
			</div>
          <br><br>

   </section>
   <section>
          <header>


             <h1 class="titulo">ENCOMENDAS</h1>    
          </header>




<?php
 require_once "conexao.php";

 function buscarvendas() {
    
    $conn=get_connection();
    if ($conn===false){
        die("Erro de conexão".mysqli_connect_error());
    }
    $sql = "SELECT 
                v.id,
                v.idusuario,
                v.dataa,
                v.vtotal,
                u.nome,
                u.email,
                u.endereco
            FROM venda as v
            JOIN usuario as u ON v.idusuario = u.id";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQL_ASSOC);
 }


 function buscaritens($id_venda) {
    
    $conn=get_connection();
    if ($conn===false){
        die("Erro de conexão".mysqli_connect_error());
    }
    $sql = " SELECT 
                v.id,
                v.idusuario,
                v.dataa,
                v.vtotal,
                p.nome,
                p.preco,
                p.descricao,
                pv.qtd
            FROM venda as v
            JOIN produtovenda as pv ON v.id = pv.id_venda
            JOIN produto as p ON p.id = pv.id_produto
            WHERE v.id = $id_venda";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQL_ASSOC);
 }

 session_start();

 $vendas = buscarvendas();

 foreach($vendas as $venda) {

?>

    <div>
        <?php echo $venda["id"]; ?><br>
        <?php echo $venda["nome"]; ?><br>
        <?php echo $venda["email"]; ?><br>
        <?php echo $venda["endereco"]; ?><br>
        <?php echo $venda["dataa"]; ?><br>
        <?php echo $venda["vtotal"]; ?><br>
        <table>
            <tr>
                <th> Produto </th>
                <th> Preço </th>
                <th> Quantidade </th>
                <th> Subtotal </th>
            </tr>
            <?php
                $produtos = buscaritens($venda["id"]);
                foreach ($produtos as $produto) {
            ?>   
            <tr>
                <td> <?php echo $produto["nome"]; ?> </td>
                <td> <?php echo $produto["preco"]; ?> </td>
                <td> <?php echo $produto["qtd"]; ?> </td>
                <td> <?php echo $produto["preco"] * $produto["qtd"]; ?> </td>
            </tr>
            </table>

            <?php
                }    
            ?>
    </div><br>
<?php
 }
?>

 