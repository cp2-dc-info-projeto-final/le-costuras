    
<!DOCTYPE html>
<html lang="en">
<head>
<link href="formulario.css" rel="stylesheet">
<meta charset="UTF-8">
<title>Formulário de Cadastro</title>
</head>
<body>


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
            <li><a href="loginview.php">Login</a></li>
            <li><a  href="cadastroview.php">Cadastro</a></li>
        </ul>
        
    </nav>
<br>
<br>

<form  class="forc" action="cadastroctrl.php" method= "post">
    <h4>-</h4>
    <h2>Cadastro</h2>
    <br>
    <div >
        <label for="nome">Nome:</label>
        <input class="text" type="nome" id="nome" name="nome" />
    </div>
<br>
    <div >
       <label for="cpf">CPF:</label>
        <input class="text"  type="text" class="form-control" placeholder="  Ex.: 000.000.000.00"  maxlength="14" autocomplete="off" cpf-mask= 000.000.000-00" id="cpf" name="cpf" />
    </div>
<br>
    <div >
            <label for="date">Data de Nascimento:</label>
            <input class="DATE" type="date" id="data" name="data" />
    </div>
<br>

    <div >
            <label for="endeco">Endereço:</label>
            <input class="text" type="endereco" id="endereco" name="endereco" />
    </div>
<br>
    <div >
        <label for="email">E-mail:</label>
        <input class="text" type="email" id="email" placeholder="  Ex.:usuario@gmail.com" name="email" />
    </div>
    <br>
        <div >
            <label for="senha">Senha:</label>
            <input class="text" type="password" id="senha" name="senha" />
        </div>
        
        <div >
                <label for="senha2">Confirme sua senha:</label>
                <input class="text" type="password" id="confirma" name="confirma" />
        </div>
    
    <br>
        <div class="button">
            <button type="submit">Cadastrar</button>
        </div>
        <h4>-</h4>
        

    <?php
        session_start();
        if(array_key_exists('erro', $_SESSION) == true){
            $erro = $_SESSION["erro"];
            echo "<br><b>$erro</b>";
        }
    ?>
    
    <p>
        <a href="formLogin.php">Login</a>
    </p>
</form>
</body>
</html>