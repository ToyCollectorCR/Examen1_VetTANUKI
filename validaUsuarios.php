<?php
require_once './baseDatos/consultaUsuarios.php';

  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $usuario = validarUsuario();
              $usuario2 = validarUsuario2();
              if(!empty($usuario)){
                  $_SESSION['usuarioLogueado'] = $usuario;
                  header('location:index.php');
              }
              else if (!empty($usuario2)){
                  $_SESSION['usuarioLogueado'] = $usuario2;
                  header('location:indexUsuarios.php');
              }
              else {
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
  
function validarUsuario2(){
      
    $correo = $_POST['correo']; 
    $password = $_POST['password'];
    
    $usuario = buscarUsuario2($correo,$password);          
    return $usuario;
  }
?>