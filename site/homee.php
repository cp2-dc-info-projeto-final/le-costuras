<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 12.5%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

#azul {background-color:#6495ED;}
#salmao {background-color:#FA8072;}
#musgo {background-color:#556B2F;}
#vermelho {background-color:#B22222;}
#amarelo {background-color:#DAA520;}
#verde {background-color:#2E8B57;}
#rosa {background-color:#BC8F8F;}
#cinza {background-color:grey;}


</style>
</head>
<body>

<div id="azul" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Home</p>
</div>

<div id="salmao" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Feminino</p>
</div>

<div id="musgo" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Masculino</p>
</div>

<div id="vermelho" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Infantil</p>
</div>

<div id="amarelo" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Consertos</p>
</div>

<div id="verde" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Cadastro</p> 
</div>

<div id="rosa" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Login</p>
</div>

<div id="cinza" class="tabcontent">
  <h1>Lê Costuras</h1>
  <p>Carrinho</p>
</div>

<button class="tablink" onclick="openCity('azul', this, '#6495ED')" id="defaultOpen">HOME</button>
<button class="tablink" onclick="openCity('salmao', this, '#FA8072')">FEMININO</button>
<button class="tablink" onclick="openCity('musgo', this, '#556B2F')">MASCULINO</button>
<button class="tablink" onclick="openCity('vermelho', this, '#B22222')">INFANTIL</button>
<button class="tablink" onclick="openCity('amarelo', this, '#DAA520')">CONSERTOS</button>
<button class="tablink" onclick="openCity('verde', this, '#2E8B57')">CADASTRO</button>
<button class="tablink" onclick="openCity('rosa', this, '#BC8F8F')">LOGIN</button>
<button class="tablink" onclick="openCity('cinza', this, 'grey')">CARRINHO</button>

<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<br><br><br><br><br>

<center>
<h2 class="w3-center">le costuras</h2>


<div class="w3-content w3-section" style="max-width:850px">
  <img class="mySlides" src="pizza.jpg" style="width:100%">
  <img class="mySlides" src="pastel.jpg" style="width:100%">
  <img class="mySlides" src="fritas.jpg" style="width:100%">
</div>
</center>

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

</body>
</html> 

