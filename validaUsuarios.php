<?php
require_once './baseDatos/consultaUsuarios.php';

  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $usuario = validarUsuario();
              $rol = validaRyE();  //Valido Rol Y Estado
              if(!empty($usuario)){
                  $_SESSION['usuarioLogueado'] = $usuario;
                  header('location:index.php');
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
  
    function validaRyE(){
      
    $rol = $_POST['rol']; 
    $estado = $_POST['estado'];
    
    $usuario = buscarUsuario($rol,$estado);          
    return $rol;
  }
  
?>