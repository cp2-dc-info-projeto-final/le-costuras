<?php
    session_start();
    require "cadacatalogomodelo.php";
    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $imagem = $_FILES["arquivo"]["name"];

    $insert_id = cadastraproduto($nome, $preco, $descricao, $imagem);
    if (!is_null($insert_id))
    {
        
        
        mkdir('../site/imagemp/'.$insert_id.'/',755, true);
        move_uploaded_file($_FILES["arquivo"]["tmp_name"],'../site/imagemp/'.$insert_id.'/'.$imagem);
        $msg="<p style='color:green;'>Catálogo cadastrado com sucesso</p>";
        $_SESSION["msg"]= $msg;
        header("Location: cadacatalogoview.php");
        exit();
        
    } 
    session_unsset();
      
        ?>