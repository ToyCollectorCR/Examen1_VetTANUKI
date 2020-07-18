<?php
 require_once './baseDatos/consultaUsuarios.php';

// Switch de Decision para todos los POST que lleguen a Existir
    if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarUsuario();
            header("location:listarUsuarios.php");
            break;
        case 'actualizar':
            actualizarUsuario();
            header("location:listarUsuarios.php");
            break;            
    }
  }
  
  
  // Switch de Decision para todos los GET que lleguen a Existir
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarUsuario();
            header("location:listarUsuarios.php");
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
      
      registrarUsuario($nombre,$cedula,$telefono,$correo,$direccion,$estado,$rol,$password);
  }
  
   function actualizarUsuario(){
      $nombre = $_POST['nombre'];
      $cedula = $_POST['cedula'];
      $telefono = $_POST['telefono'];
      $correo = $_POST['correo'];
      $direccion = $_POST['direccion'];
      $estado = $_POST['estado'];
      $rol = $_POST['rol'];
      $password = $_POST['password'];
      
      modificarUsuario($nombre,$cedula,$telefono,$correo,$direccion,$estado,$rol,$password);   
  }
  
  
    function eliminarUsuario(){
      $cedula = $_GET['cedula'];
      eliminarUserCed($cedula);
  }
  
?>

