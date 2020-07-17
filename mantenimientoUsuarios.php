<?php

// Switch de Decision para todos los POST que lleguen a Existir
    if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarUsuario();
            header("location:index.php");
            break;
        case 'actualizar':
            actualizarCita();
            header("location:listarCitas.php");
            break;            
    }
  }
  
    function guardarUsuario(){
      $nombre = $_POST['nombre'];
      $cedula = $_POST['cedula'];
      $telefono = $_POST['telefono'];
      $correo = $_POST['correo'];
      $direccion = $_POST['direccion'];
      $estado = $_POST['estado'];
      $rol = $_POST['rol'];
      $password = $_POST['password'];
      
      registrarUsuario($nombrepropietario,$nombremascota,$raza,$edadmascota,$fechacita,$observaciones);
  }
  
?>

