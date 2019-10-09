<?php

    function getConnection() {
        $link = mysqli_connect("localhost", "root", "", "lecosturas");
 
        // Check connection
        if($link === false){
            die("Nâo foi possível executar o catalogo." . mysqli_connect_error());
        }

        return $link;
    }

?>