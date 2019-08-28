<?php
function buscarprodutos() {
    $connection = mysqli_connect("localhost", "root", "", "bdprodutos");
    // Check connection
    if($connection === false) {
        die("Mano acho q n ta rolando aqui o  mysql :v" . mysqli_connect_error());
    }
    $sql = "SELECT  nome, preco, descricao, categoria  FROM produto";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    $produtos = [];
    
    if(mysqli_query($connection, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $produt = [];
            while ($row = mysqli_fetch_assoc($result)) {
               
                $produt['nome'] = $row['nome'];
                $produt['preco'] = $row['preco'];
                $produt['descricao'] = $row['descricao'];
                $produt['categoria'] = $row['categoria'];
              
                array_push($produtos, $produt);
            }
        }
    } else{
        die("Erro ao buscar produtos com a consulta $sql. " . mysqli_error($connection));
    }  
    mysqli_close($connection);
    return $produtos;
}
?>