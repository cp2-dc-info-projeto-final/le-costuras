<?php

    function get_connection() {
        $host="localhost";
        $user="root";
        $password="";
        $database="lecosturas";

        $conn=mysqli_connect($host, $user, $password, $database );
        set_time_limit(60);
        mysqli_set_charset($conn,'utf8');

        return $conn;
    }
?>