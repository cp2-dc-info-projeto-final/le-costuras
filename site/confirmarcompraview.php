<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	  <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />	
    <link href="css2/memenu.css" rel="stylesheet" type="text/css" media="all" />
    
</head>


<body>
<div class="container">
			<div class="head-top">
				
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
                <li><a  href="indexcarrinho.php">Catálogo</a></li>
				<li><a  href="sair.php">Sair</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>
<br>
<br>

<form class="forc" action="loginctrl.php" method="post">
  
<?php
      session_start();
      if (array_key_exists('erro', $_SESSION) == true){
        $erro = $_SESSION["erro"];
        echo "$erro";
        }
    ?>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Produtos Selecionados
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <p>Camisa: R$50.<br>
                           Blusa Regata:  R$50.<br>
                           Calça: R$120.00
                        </p>
                           
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    <BR>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <p>
                            Valor toal: R$220.00
                        </p>
                           
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Confirmar Compra
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						

						<a href="indexcarrinho.php" class="txt2 hov1">
							Voltar ao Catálogo
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
  </form>
 
</body>
</html>
    