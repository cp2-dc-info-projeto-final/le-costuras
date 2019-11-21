<?php
 session_start();


 $id_produto = $_GET["prod"];

 if (!isset($_SESSION["carrinho"])) {
     $_SESSION["carrinho"] = [];
 }
      
 if ($_SESSION['carrinho'][$id_produto] > 0)
 {
   unset($_SESSION['carrinho']);
 }


        header("Location: carrinho.php");
     
       
    
         
       
?>