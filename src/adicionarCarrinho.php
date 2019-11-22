<?php

    session_start();

    $id_produto = $_GET["prod"];

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = [];
    }

    if (isset($_SESSION["carrinho"][$id_produto])) {
        $_SESSION["carrinho"][$id_produto] += 1;
    } else  {
        $_SESSION["carrinho"][$id_produto] = 1;
    }

    header("Location: indexcarrinho.php");
    exit();
?>