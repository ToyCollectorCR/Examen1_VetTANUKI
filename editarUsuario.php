<?php 
include_once 'include/encabezado.php'; 


  if(isset($_GET['cedula'])){
     
      $cedula  = $_GET['cedula'];
      $usuario = buscaUsuarioXCed($cedula);
      //var_dump($cita);
      //die();
      
  }
?>
<section>
    <br>
    <h3>EDICION DE USUARIOS</h3>
    <form method="post" action="mantenimientoUsuarios.php">

        <h5>Nombre Completo</h5>
        <input  type="text" placeholder="Nombre" name="nombre" required value="<?=$usuario['nombre'];?>">
        
        <h5>Cedula</h5>
        <input type="text" placeholder="Cedula"  name="cedula" required value="<?=$usuario['cedula'];?>">
        
        <h5>Telefono</h5>
        <input type="text" placeholder="Telefono" name="telefono" required value="<?=$usuario['telefono'];?>">              
        
        <h5>Correo</h5>
        <input type="text" placeholder="Correo" name="correo" required value="<?=$usuario['correo'];?>">
        
        <h5>Direccion</h5>
        <input type="text" placeholder="Direccion" name="direccion" required value="<?=$usuario['direccion'];?>">
        
        <h5>Estado</h5>
        <input type="text" placeholder="Estado" name="estado" required value="<?=$usuario['estado'];?>">
        
        <h5>Rol (admin O usuario)</h5>
        <input type="text" placeholder="Rol" name="rol" required value="<?=$usuario['rol'];?>">
        
        <h5>Password</h5>
        <input type="text" placeholder="Password" name="password" required value="<?=$usuario['password'];?>">
        
        <input type="submit" name="accion" value="actualizar">
    </form>
    
</section>

<section>
    <nav>
        <ul>
            <li><a href="index.php">Regresar al Menu Principal</a></li>
        </ul>
    </nav>
</section>

<?php include_once 'include/piepagina.php'; ?>