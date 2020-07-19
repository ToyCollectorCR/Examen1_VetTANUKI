<?php
require_once './baseDatos/consultaUsuarios.php';

  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $usuario = validarUsuario();
              if(!empty($usuario)){
                  
                  $_SESSION['usuarioLogueado'] = $usuario;
                  
                  if($usuario['rol'] == 'admin'){
                      header('location:index.php');
                  }else if ($usuario['rol'] == 'asistente' && $usuario['estado'] == 'activo'){
                      header('location:indexUsuarios.php');
                  }else{
                       header('location:login.php');
                  }
                  
              }else{
                  header('location:login.php');
              }
          break;          
      }
  }

  
  function validarUsuario(){
      
    $correo = $_POST['correo']; 
    $password = $_POST['password'];
    
    $usuario = buscarUsuario($correo,$password);          
    return $usuario;
  }
  
?>
