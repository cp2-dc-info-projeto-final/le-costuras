<!DOCTYPE html>

<html lang=en>
    <head><title>LêCosturas</title>
        <link rel="icon" type="jpg" href="le.jpg" width=60 height=40 />
        <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″> <!--permitir acentuação-->
    </head>
<body>
<link href="formulario.css" rel="stylesheet"> <!--link com o arquivo css para estilizar o site-->
<h1> LêCosturas</h1> 

<br>
<nav id="menu" inline >
        <ul>
            <li><a  href="pagina inicial.html">Home</a></li>
            <li><a href="pagina inicial.html">Catálogo</a>
                <ul> 
                    <li><a href="#">Feminino</a></li>
                    <li><a href="#">Masculino</a></li>
                    <li><a href="#">Infantil</a></li>
                    <li><a href="#">Promoções</a></li>                     
                  </ul>
              </li>
            <li><a href="#">Consertos</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a  href="cadastro.html">Cadastro</a></li>
        </ul>
       
    </nav>
<br>
<br>

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