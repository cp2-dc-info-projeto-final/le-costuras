<?php

    function getConnection() {
        $link = mysqli_connect("localhost", "root", "", "bdusuario");
 
        // Check connection
        if($link === false){
            die("Nâo foi possível executar o cadastro." . mysqli_connect_error());
        }

        return $link;
    }

?>