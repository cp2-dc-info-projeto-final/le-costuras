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
 


<form class="forc" method="post">
    <h4>              -    </h4>
    <h2>Login</h2>
<br>    <div >
        <label for="email">E-mail:</label>
        <input class="text" type="email" id="email"  name="usuario_email" />
    </div>
<br>
    <div >
        <label for="senha">Senha:</label>
        <input class="text" type="password" id="senha"  name="usuario_senha" />
    </div>
    <br>
    <div class= "checkbox">
    <input type="checkbox" id="Login" name="Login" checked> Mantenha-me logado</input></div>
    <div class="button">
        <button type="submit">Entrar</button>
        <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
            session_unset();
        }
    ?>
    </div>
    <div>
       
        

      </div>
  <br>
  <a href="">Esqueci minha senha</a>
  <br>
  <a href="cadastro.html"> Cadastrar </a> <!--link com a pagina de cadastro-->
  <h4>           -     </h4>
</form>
</body>
</html
