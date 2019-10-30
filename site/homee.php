<!DOCTYPE html>
<html lang="en">
<head>
<link href="formulario.css" rel="stylesheet">
<meta charset="UTF-8">
<title>Cadastro</title>
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

    <br><br><br>
    <div class="w3-col m6 w3-padding-large">
     <form class="boo">
      <p class="text1">
      Precisando de roupas novas??
Se a resposta for sim, você está no lugar certo. Sejam bem-vindos ao site LÊ COSTURAS!!
Em nosso site você pode encomendar todas as roupas confeccionadas que estejam disponíveis em nosso site, por um preço baixo e com serviço de qualidade feito por nossa costureira profissional, Alessandra Crisóstomo.
Fiquem sempre ligados no site, as vezes rolam diversas promoções de roupas.

      <p>Trabalhamos com roupas das categorias: feminina, masculina e também infantil.</p>

      </p>
     </form>
    
    </div>


    <h2 class="title">APROVEITE!</h2>

<center>
  <div> 
   <img class="mySlides" src="ROUPA.jpg" style="width:50%">
   <img class="mySlides" src="ROUPA2 (1).jpg" style="width:50%">
   <img class="mySlides" src="ROUPA2.jpg" style="width:50%">
  </div>
<center>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<br>
<br>
</body>
</html>