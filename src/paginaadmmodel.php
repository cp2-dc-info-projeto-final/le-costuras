<?php
require "cadacatalogomodelo.php";
require "conexao.php";
 
function Tipo_Usuarios(){
    $conn=get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 $usuarios=[];
  if (isset($_SESSION['id'])){
  $dif=$_SESSION['id'];
  $sql="SELECT * FROM usuario WHERE id!=$dif";}
 else{  
     $sql="SELECT * FROM usuario" ;
      }
 $result=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_assoc($result)){
     $usuario['id']=$row['id'];
     $usuario['email']=$row['email'];
     $usuario['nome']=$row['nome'];
     $usuario['moderador']=$row['moderador'];
     array_push($usuarios, $usuario);
 
}
mysqli_close($conn);
 return $usuarios;
}
function muda_usuario($id, $tipo){
    $conn=get_connection();
    if($conn===false){
        die("Falha na conexão". mysqli_connect_error());
 }
 if ($tipo==1 || $tipo==0){
 if ($tipo==1){
  $sql="UPDATE usuario SET moderador=0 WHERE id=$id";
 } else { $sql= "UPDATE usuario SET moderador=1 WHERE id=$id ";}
 mysqli_query($conn, $sql);
 mysqli_close($conn);
} else {die('<html><title>ERRO!</title><h1><p style=\'color:red;\'>ERRO!!!</p></h1></html>');}
 
}
?>