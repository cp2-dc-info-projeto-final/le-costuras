<?php

    function getConnection() {
        $link = mysqli_connect("localhost", "root", "", "lecostura");
 
        // Check connection
        if($link === false){
            die("Nâo foi possível executar o cadastro." . mysqli_connect_error());
        }

        return $link;
    }

?>