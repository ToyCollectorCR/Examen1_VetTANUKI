
<!--/**/!-->


<?php 
    
require_once './baseDatos/consultaCitas.php'; 
   
if(!isset($_SESSION['usuarioLogueado'])){
       header('location:login.php');
   }
     
     
?>

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>TANUKI</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        
            <h1>BIENVENIDOS A VETERINARIA TANUKI</h1>
         <nav>
            <ul>
            <?php if(isset($_SESSION['usuarioLogueado'])):?>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
            <?php endif;?>
            </ul>
        </nav>
         
