<?php
 require "loginmodelo.php";
 session_start();
    $email = addslashes ($_POST["email"]);
    $senha = addslashes ($_POST["senha"]);

    $_SESSION['email']= $email;
    if (autentica($email, $senha)== true){
        session_unset();
        session_destroy();
        session_start();
        $conn=get_connection();
        if ($conn===false){
            die("Erro de conexão".mysqli_connect_error());
        }
        $sql= "SELECT id FROM usuario WHERE email='$email'";
                $result= mysqli_query($conn, $sql);
                if (mysqli_num_rows($result)>0){
                    $row=mysqli_fetch_assoc($result);
                    if (!isset($_SESSION["id"])) {
                        $_SESSION["id"] = $row["id"];
                    }
                    
                }
        $_SESSION['email']= $email;
        $tipo=moderador($_SESSION['email']);
        $_SESSION['moderador']=$tipo['moderador'];
        header("Location: homee.php");
        exit();
    } else{
        
        $erro= "<p style='color:red;'>Login ou senha incorretos</p>";
        $_SESSION["erro"]=$erro;
        header("Location: loginview.php");
    }
    
?>