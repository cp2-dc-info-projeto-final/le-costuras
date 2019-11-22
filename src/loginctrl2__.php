<?php
 require "loginmoldelo.php";
 session_start();
    $email=addslashes($_POST['email']);
    $senha=addslashes($_POST['senha']);
    $_SESSION['email']= $email;
    session_unset();
    if (autentica($email, $senha)== true){
        session_start();
        $_SESSION['email']= $email;
        $tipo=moderador($_SESSION['email']);
        $_SESSION['moderador']=$tipo['moderador'];
        die($_SESSION['moderador']);
        header("Location: homee.php");
        exit();
    } else{
        
        $erro= "<p style='color:red;'>Login ou senha incorretos</p>";
        $_SESSION["erro"]=$erro;
        header("Location: loginview.php");
    }
    
?>