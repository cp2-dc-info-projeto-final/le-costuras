<?php
 session_start();


 $id_produto = $_GET["prod"];

 if (!isset($_SESSION["carrinho"])) {
     $_SESSION["carrinho"] = []; 
     session_reset();
 }

    header("Location: carrinho.php");
?>      