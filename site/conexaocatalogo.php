<?php
    function get_connection() {
        $host="localhost";
        $user="root";
        $database="lecostura";
        $conn=mysqli_connect($host, $user, $database );
        mysqli_set_charset($conn,'utf8');
        return $conn;
    }
?>