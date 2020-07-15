<?php

  require_once 'conexionDB.php';
 
    //Busca el  usuario por correo y password
  function buscarUsuario($correo,$password){
      $sql = "SELECT * FROM VETUSUARIOS WHERE CORREO='$correo' AND PASSWORD='$password'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  } 
  
?>