<?php
  require_once './baseDatos/consultaCitas.php';   

  
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarCita();
            header("location:index.php");
            break;
        case 'actualizar':
            actualizarCita();
            header("location:index.php");
            break;            
    }
  }
  
  // Aqui entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarCita();
            header("location:index.php");
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
      
      modificarCita($nombrepropietario,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones);   
  }
  
?>