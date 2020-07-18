<?php

  require_once 'conexionDB.php';
 
    //Busca el  usuario por correo y password
  function buscarUsuario($correo,$password){
      $sql = "SELECT * FROM VETUSUARIOS WHERE CORREO='$correo' AND PASSWORD='$password'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  } 
  
   //listo usuarios
  function listarUsuarios(){    
      $usuarios = array();
      $sql = "SELECT * FROM VETUSUARIOS ORDER BY NAME ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($usuario = mysqli_fetch_assoc($resultado)){
          array_push($usuarios, $usuario);
      } 
      
      return $usuarios;
  }
  
  
  //registro usuarios
  function registrarUsuario($nombre,$cedula,$telefono,$correo,$direccion,$estado,$rol,$password){
      
      $sql = "INSERT INTO VETUSUARIOS VALUES('$nombre','$cedula',$telefono,'$correo','$direccion','$estado','$rol','$password')";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
      
  }
  
?>