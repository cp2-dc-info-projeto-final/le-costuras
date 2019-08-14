<!DOCTYPE html>
<html lang="en">
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

<form  class="forc" action="cadastro.php" method= "post">
    <h4>-</h4>
    <h2>Cadastro</h2>
    <br>
    <div >
        <label for="nome">Nome:</label>
        <input class="text" type="nome" id="nome" name="usuario_nome" />
    </div>
<br>
    <div >
       <label for="cpf">CPF:</label>
        <input class="text"  type="text" class="form-control" placeholder="  Ex.: 000.000.000.00"  maxlength="14" autocomplete="off" cpf-mask= 000.000.000-00" id="cpf" name="usuario_cpf" />
    </div>
<br>
    <div >
            <label for="date">Data de Nascimento:</label>
            <input class="text" type="date" id="data" name="usuario_data" />
    </div>
<br>

    <div >
            <label for="endeco">Endereço:</label>
            <input class="text" type="endereco" id="endereco" name="usuario_endereco" />
    </div>
<br>
    <div >
        <label for="email">E-mail:</label>
        <input class="text" type="email" id="email" placeholder="  Ex.:usuario@gmail.com" name="usuario_email" />
    </div>
    <br>
        <div >
            <label for="senha">Senha:</label>
            <input class="text" type="password" id="senha" name="usuario_senha" />
        </div>
        
        <div >
                <label for="senha2">Confirme sua senha:</label>
                <input class="text" type="password" id="senha2" name="usuario_senha2" />
        </div>
    
    <br>
        <div class="button">
            <button type="submit">Cadastrar</button>
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
        <a href="formLogin.php">Login</a>
    </div>
        <h4>-</h4>
    
    </form>
    </body>
    </html>