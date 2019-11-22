<?php 
session_start();
if (isset($_SESSION['moderador']) && $_SESSION['moderador']==1){ 
  require 'paginaadmctrl.php'; ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="adminview.css">
        <link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />	
        <link href="css2/memenu.css" rel="stylesheet" type="text/css" media="all" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="sortcut icon" href="logo.png" type="image/x-icon" />

            <title>
                Página do Administrador
            </title>
    </head>

    <body>
<br>
<div class="container">
			<div class="head-top">
				
		  <div class=" h_menu4">
				<ul class="memenu skyblue">	
				
				<li><a  href="loginview.php">Login</a></li>	
				<?php
				  if (isset($_SESSION['email'])&& $_SESSION['moderador']==1){
					  ?>
				<li><a  href="indexcarrinho.php">Catálogo</a></li>
				 <?php } ?>

        <li><a  href="carrinho.php">Carrinho</a></li>
        <li><a  href="homee.php">Home</a></li>
        <li><a  href="cadacatalogoview.php">Catalogar Peças</a></li>
        <li><a  href="encomenda.php">ENCOMENDAS</a></li>
				<li><a  href="sair.php">Sair</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>
<br>
<br>

   

<form  class="forp" >
        
           
    
    <table id="TabelaUsuarios">
  
  <thead>
    <tr>
      
      <th>Nome</th>
      <th>E-mail</th>
      <th>Ação </th>
      <th>Id</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      
    <?php  foreach($usuarios as $usuario) { ?>
      <td><?php echo $usuario['nome'];  ?></td>
      <td><?php echo $usuario['email'];  ?></td>
      <?php if ($usuario['moderador']==1) { ?>
      <td><button type="button" name="" value="" class="buttonk" onclick="window.location.href='paginaadmctrl2.php?id=<?php echo $usuario['id']?>&moderador=1'">Rebaixar</button></td>
      <?php } else { ?>
        <td><button type="button" name="" value="" class="buttonk" onclick="window.location.href='paginaadmctrl2.php?id=<?php echo $usuario['id']?>&moderador=0'">Tornar Administrador</button></td>
      <?php } ?>
      <td><?php echo $usuario['id'];  ?></td>
      </tr>
      <?php }  ?>
    

    
  </tbody>
</table>
    
    
  
    
    
    </form>

    </body>



</html>

      <?php } else {echo '<html><title>ERRO!</title><h1><p style=\'color:red;\'>Você não possui permissão para acessar esta página!!!</p></h1></html>';} ?>