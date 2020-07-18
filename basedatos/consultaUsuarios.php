<?php

  require_once 'conexionDB.php';
 
    //Busca el  usuario por correo - password Y Verifica que el Rol se activo y sea admin
  function buscarUsuario($correo,$password){
      $sql = "SELECT * FROM VETUSUARIOS WHERE CORREO='$correo' AND PASSWORD='$password' AND ESTADO='activo' AND ROL='admin'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  } 
  
  
     //Busca el  usuario por correo - password Y Verifica que el Rol se activo y sea usuario
  function buscarUsuario2($correo,$password){
      $sql = "SELECT * FROM VETUSUARIOS WHERE CORREO='$correo' AND PASSWORD='$password' ESTADO='activo' AND ROL='usuario'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario2 = mysqli_fetch_assoc($resultado);
       
       return $usuario2;
  } 
  
  
   
  
   //listo usuarios
  function listarUsuarios(){    
      $usuarios = array();
      $sql = "SELECT * FROM VETUSUARIOS ORDER BY NOMBRE ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($usuario = mysqli_fetch_assoc($resultado)){
          array_push($usuarios, $usuario);
      } 
      
      return $usuarios;
  }
  
     //elimino users
  function eliminarUserCed($cedula){
      $sql = "DELETE FROM VETUSUARIOS WHERE cedula = $cedula";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  
  //registro usuarios
  function registrarUsuario($nombre,$cedula,$telefono,$correo,$direccion,$estado,$rol,$password){
      
      $sql = "INSERT INTO VETUSUARIOS VALUES('$nombre','$cedula',$telefono,'$correo','$direccion','$estado','$rol','$password')";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
      
  }
  
  
    //Busco Usuarios por Cedula
  function buscaUsuarioXCed($cedula){
      $sql = "SELECT * FROM VETUSUARIOS WHERE cedula = '$cedula'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $usuario = mysqli_fetch_assoc($resultado);
       
       return $usuario;
  }
  
  
  //modifico citas
  function modificarUsuario($nombre,$cedula,$telefono,$correo,$direccion,$estado,$rol,$password){
      $sql = "UPDATE VETUSUARIOS SET nombre='$nombre',telefono=$telefono,correo='$correo',direccion='$direccion',estado='$estado',rol='$rol',password='$password' WHERE CEDULA='$cedula'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }
  
?>