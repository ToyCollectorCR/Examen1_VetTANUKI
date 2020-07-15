<?php

//Se establece la conecion con la Base de Datos

$servidor = '127.0.0.1';
$usuario = 'root';
$password = '';
$baseDatos = 'test';

$conexion = mysqli_connect($servidor, $usuario, $password, $baseDatos);

mysqli_query($conexion, "SET NAMES 'utf8'");

session_start();

?>