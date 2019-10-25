<?php
 function cadastraproduto($nome, $preco, $descricao, $imagem){
    include_once "conexao.php";
        $conn = get_connection();
        if($conn===false){
            die("Falha na conexão". mysqli_connect_error());
        }
        
            
                $sql="INSERT INTO produto (nome, preco, descricao, imagem) VALUES
                ('$nome',$preco,'$descricao', 'imagem')";
        
                if (mysqli_query($conn, $sql)) {
                    $id=mysqli_insert_id($conn);
                    $sql="UPDATE produto SET imagem='imagemp/$id/$imagem'
                    WHERE produto.id=$id";
                    mysqli_query($conn, $sql);  
                    return $id;
                } else {
                    die("Erro ao efetuar o cadastro" . mysqli_error($conn));
                }
            
        
        mysqli_close($conn);
            }

    ?>