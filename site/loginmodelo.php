<?php 
    function autenticacao($email, $senha) {
        $connection = mysqli_connect("localhost", "root", "", "lecostura"); 
        $sql = "SELECT senha,email FROM usuario WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $erro = "";
        if (mysqli_num_rows($result) > 0) 
        {
           
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];
                if (password_verify($senha, $hash)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }        
        mysqli_close($connection);
    }    
?>