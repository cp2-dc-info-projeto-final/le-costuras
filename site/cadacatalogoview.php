<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cadastrar Catálogo</title>

</head> 
<body>
<form  class="forc" action="cadacatalogoctrl.php" method= "post">

   <div >
        <label for="nome">Nome:</label>
        <input class="text" type="nome" id="nome" name="nome" />
    </div>
<br>
    <div >
            <label for="preco">Preço:</label>
            <input class="preco" type="preco" id="preco" name="preco" />
    </div>
<br>

    <div >
            <label for="descricao">Descrição:</label>
            <input class="descricao" type="text" id="descricao" name="descricao" />
    </div>
    <br>
    <div>
   
        <input class="arquivo" type="file" placeholder="Imagem:" name="arquivo" required="required" accept="image/*"></textarea>
    <div>
<br>
        <div class="button">
            <button type="submit" >Catalogar</button>
        </div>
        
        <?php
        session_start();
        if(array_key_exists('msg', $_SESSION) == true){
            $msg = $_SESSION["msg"];
            echo "$msg";
            session_unset();
        }
    ?>
        </form>
        </body>
        </html>