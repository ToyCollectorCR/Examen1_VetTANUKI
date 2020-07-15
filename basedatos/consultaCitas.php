<?php

require_once 'conexionDB.php';

  //listo citas
  function listarCitas(){    
      $citas = array();
      $sql = "SELECT * FROM VETCITAS ORDER BY ID ASC";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);
            
      while($cita = mysqli_fetch_assoc($resultado)){
          array_push($citas, $cita);
      } 
      
      return $citas;
  }

  //registro citas
  function registrarProducto($nombre,$marca,$presentacion,$cantidad,$precio){
      
      $sql = "INSERT INTO PRODUCTOS VALUES('$nombre','$marca','$presentacion',$cantidad,$precio)";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);      
  }

   //elimino citas
  function eliminarProductoNombre($nombre){
      $sql = "DELETE FROM PRODUCTOS WHERE NOMBRE = '$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  //Busco citas por nombre
  function buscarProducto($nombre){
      $sql = "SELECT * FROM PRODUCTOS WHERE NOMBRE = '$nombre'";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $producto = mysqli_fetch_assoc($resultado);
       
       return $producto;
  }

  //modifico citas
  function modificarProducto($nombre,$marca,$presentacion,$cantidad,$precio){
      $sql = "UPDATE PRODUCTOS SET MARCA='$marca',PRESENTACION='$presentacion',CANTIDAD=$cantidad,PRECIO=$precio WHERE NOMBRE='$nombre'";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }





?>