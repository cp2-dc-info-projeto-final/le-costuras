<?php
    function get_connection() {
        $host="localhost";
        $user="root";
        $password="";
        $database="lecosturas";
        $conn=mysqli_connect($host, $user, $password, $database );
        mysqli_set_charset($conn,'utf8');
        return $conn;
    }
?>