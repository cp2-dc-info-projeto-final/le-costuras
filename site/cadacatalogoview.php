<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Cadastrar Catálogo</title>

</head> 
<body>
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
        <div class="button">
            <button type="submit">Catalogar</button>
        </div>

        <?php
                session_start();
                if(array_key_exists('erro', $_SESSION) == true){
                    $erro = $_SESSION["erro"];
                    echo "$erro";
                }

                
                
            ?>

        </body>
        </html>