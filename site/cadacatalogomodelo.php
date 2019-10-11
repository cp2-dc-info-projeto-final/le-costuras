<?php
 function cadastraproduto($nome, $preco, $descricao){
    include_once "conexaocatalogo.php";
 $conn=get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
    $sql="SELECT id FROM produto WHERE";
    $result=mysqli_query($conn, $sql);
    $erro="";
    
    if (mysqli_num_rows($result)>0){
        return false;
    } 
    $sql="INSERT INTO usuario (nome, preco, descricao   ) VALUES ('$nome', '$preco', '$descricao')";
    if (mysqli_query($conn, $sql)){
        return true;
    } else{
        die("Erro ao ecatalogar" . mysqli_error($conn));
    }
    mysqli_close($conn);
  
 }
 ?>