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
  function registrarCita($nombrepropietario,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones){
      
      $sql = "INSERT INTO VETCITAS(nombrepropietario,nombremascota,raza,edadmascota,fechacita,observaciones) VALUES('$nombrepropietario','$nombremascota','$raza','$edadmascota','$fechacita','$observaciones')";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
      
  }

   //elimino citas
  function eliminarCitaid($id){
      $sql = "DELETE FROM VETCITAS WHERE id = $id";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);   
  }
  
  //Busco citas por id
  function buscarCita($id){
      $sql = "SELECT * FROM VETCITAS WHERE id = $id";
       $resultado = mysqli_query($GLOBALS['conexion'], $sql); 
       
       $cita = mysqli_fetch_assoc($resultado);
       
       return $cita;
  }

  //modifico citas
  function modificarCita($id,$nombrepropietario,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones){
      $sql = "UPDATE VETCITAS SET nombrepropietario='$nombrepropietario',nombremascota='$nombremascota',raza='$raza',edadmascota='$edadmascota',fechacita='$fechacita',observaciones='$observaciones'  WHERE id=$id";
      $resultado = mysqli_query($GLOBALS['conexion'], $sql);       
  }





?>