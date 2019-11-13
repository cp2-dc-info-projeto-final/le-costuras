<?php 
session_start();
if (isset($_SESSION['email']) && $_SESSION['moderador']==1){ 
  require 'paginaadmctrl.php'; ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- tag para colocar adaptar o site para a codificação UTF-8 -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="formulario.css">
    


            <title>
                Página do Administrador
            </title>
    </head>

    <body>
    <h1> LêCosturas</h1> 
<br>
<nav id="menu" inline >
        <ul>
        <li><a  href="home.php">Home</a></li>
            <li><a href="">Catálogo</a>
              
              </li>
            <li><a href="loginview.php">Login</a></li>
            <li><a  href="cadastroview.php">Cadastro</a></li>
            <li><a href="#">Carrinho</a></li>
        </ul>
        
    </nav>
<br>
<br>

   

<form  class="forp" >

        <button>Cadastrar catálogo<a  href="cadacatalogoview.php">Home</a></button>
        
           
    
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