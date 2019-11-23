<!DOCTYPE html>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<title>Home</title>

<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--fonts-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!-- start menu -->
<link href="css2/memenu.css" rel="stylesheet" type="text/css" media="all" />

<link rel="sortcut icon" href="logo.png" type="image/x-icon" />
</head>
<body>


<div class="container">
			<div class="head-top">
				
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color1" href="indexcarrinho.php">Catálogo</a></li>	
				
				
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
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

  <div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>SEJA BEM-VINDO À LÊ COSTURAS</h3>
						<br>
						<a href="indexcarrinho.php">Ver Catálogo</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text" >
							<h3>PEÇAS SOB ENCOMENDA</h3>
						<p>Na Lê Costuras você pode encomendar suas roupas por um preço baixo e com um serviço de ótima qualidade!</p>
						<br>	
						<a href="indexcarrinho.php">Ver Catálogo</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>PROMOÇÕES EXCLUSIVAS</h3>
						<p>Fique ligado em nosso site e não perca nossas incríveis promoçoes!</p>
						<br>
								<a href="indexcarrinho.php">Ver Catálogo</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NOSSOS TRABALHOS</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="indexcarrinho.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="imagemp/2/kfranja.jpeg" alt="">
							<div class="b-wrapper">
									
								</div>
				</a>
                <p><a href="indexcarrinho.php">Kimono Mey</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="indexcarrinho.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="imagemp/3/bamarela.jpeg" alt="">
					<div class="b-wrapper">
									
								</div>
				</a>
			<p><a href="indexcarrinho.php">Blusa Aurora</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="indexcarrinho.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="imagemp/1/kestampado.jpeg" alt="">
					<div class="b-wrapper">
									
								</div>
				</a>
			<p><a href="indexcarrinho.php">Kinomo Natasha</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="indexcarrinho.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="imagemp/4/bazul.jpeg" alt="">
					<div class="b-wrapper">
									
								</div>
				</a>
			<p><a href="single.html">Blusa Celeste</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="indexcarrinho.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="imagemp/5/vesinf.jpg" alt="">
					<div class="b-wrapper">
									
								</div>
				</a>
			<p><a href="single.html">Vestido Gabi</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="indexcarrinho.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="imagemp/7/bpreta.jpg" alt="">
					<div class="b-wrapper">
									
								</div>
				</a>
			<p><a href="indexcarrinho.php">Blusa Katy</a></p>
			</div>
			
					<div class="clearfix"> </div>
		</div>
	</div>


</body>
</html>