    
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">	
	  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	  <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="formulario.css">
	<link rel="sortcut icon" href="logo.png" type="image/x-icon" />
<meta charset="UTF-8">
<title>Cadastro</title>
</head>
<body>


<nav class="menu">
        <ul>
            <li><a  href="homee.php">Home</a></li>
            <li><a href="">Catálogo</a></li>
            <li><a  href="loginview.php">Login</a></li>
        
        </ul>
        
    </nav>
<br>
<br>

<form  class="forc" action="cadastroctrl.php" method= "post">
<?php
      session_start();
      if(array_key_exists('erro', $_SESSION) == true){
          $erro = $_SESSION["erro"];
          echo "<br><b>$erro</b>";
          session_unset();
      }
      ?>
      
      <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Cadastro
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nome" placeholder="Nome">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="endereco" name="endereco" placeholder="Endereço">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="confirma" placeholder="Confirmar senha">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Confirmar Cadastro
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						

						<a href="loginview.php" class="txt2 hov1">
							Já é cadastrado? Faça seu Login
						</a>
					</div>
  
</form>
</body>
</html>