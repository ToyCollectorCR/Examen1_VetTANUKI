<?php
  require_once './baseDatos/consultaCitas.php';   

   // Switch de Decision para todos los POST que lleguen a Existir
    if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarCita();
            header("location:listarCitas.php");
            break;
        case 'actualizar':
            actualizarCita();
            header("location:listarCitas.php");
            break;            
    }
  }
  
  // Switch de Decision para todos los GET que lleguen a Existir
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarCita();
            header("location:listarCitas.php");
            break;       
    }
  }  

  function guardarCita(){
      $nombrepropietario = $_POST['nombrepropietario'];
      $nombremascota = $_POST['nombremascota'];
      $raza = $_POST['raza'];
      $edadmascota = $_POST['edadmascota'];
      $fechacita = $_POST['fechacita'];
      $observaciones = $_POST['observaciones'];
      
      
      
      registrarCita($nombrepropietario,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones);
  }
  
  function eliminarCita(){
      $nombrepropietario = $_GET['$nombrepropietario'];
      eliminarCitaNombre($nombrepropietario);
  }
  
  function actualizarCita(){
      $nombrepropietario = $_POST['nombrepropietario'];
      $nombremascota = $_POST['nombremascota'];
      $raza = $_POST['raza'];
      $edadmascota = $_POST['edadmascota'];
      $fechacita = $_POST['fechacita'];
      $observaciones = $_POST['observaciones'];
      
      modificarCita($id,$nombrepropietario,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones);   
  }
  
?>