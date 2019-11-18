<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	  <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="formulario.css">
<meta charset="UTF-8">
<title>Cadastrar Catálogo</title>


</head> 
<body>

<nav class="menu">
        <ul>
            <li><a  href="home.php">Home</a></li>
            <li><a href="">Catálogo</a></li>
            <li><a  href="loginview.php">Login</a></li>
            <li><a href="#">Carrinho</a></li>
        </ul>
        
    </nav>

<div class="limiter">

<form  class="forc" action="cadacatalogoctrl.php" method="post" enctype="multipart/form-data">

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Cadastrar Produto
					</span>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nome" placeholder="Nome">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="preco" name="preco" placeholder="Insira o preço">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <br>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="descricao" placeholder="Descrição do produto">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <br>
                    <div class="wrap-input100 rs1 validate-input">
						<input class="input100" type="file" name="arquivo" placeholder="Insira a imagem">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>

                    <br>
                    <div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Catalogar
						</button>
					</div>
        
        <?php
        session_start();
        if(array_key_exists('msg', $_SESSION) == true){
            $msg = $_SESSION["msg"];
            echo "$msg";
            session_unset();
        }
    ?>

</div>
        </form>
        </body>
        </html>