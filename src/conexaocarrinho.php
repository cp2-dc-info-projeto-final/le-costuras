<?php

  function criarConexao() {
  $pdo = new PDO("mysql: host=localhost; dbname=lecosturas","root","");

    return $pdo;
  }
?>
