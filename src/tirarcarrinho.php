<?php

    session_start();

    $id_produto = $_GET["prod"];

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = [];
    }

    if (isset($_SESSION["carrinho"][$id_produto])) {
        $_SESSION["carrinho"][$id_produto] -= 1;
    } else  {
        $_SESSION["carrinho"][$id_produto] = 1;
    }
    if ($_SESSION['carrinho'][$id_produto] == 0)
    {
      unset($_SESSION['carrinho'][$id_produto]);
    }
    header("Location: carrinho.php");
    exit();
?>
