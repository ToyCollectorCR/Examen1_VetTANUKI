<?php 
include_once 'include/encabezado.php'; 

var_dump($_GET);
  if(isset($_GET['nombre'])){
      echo 'Probando IF';
      
      $nombrepropietario  = $_GET['nombre'];
      $cita = buscarCita($nombrepropietario);
      //var_dump($cita);
      //die();
      
  }
?>
<section>
    <br>
    <h3>AQUI PUEDE EDITAR LAS CITAS YA EXISTENTES</h3>
    <form method="post" action="mantenimientoCitas.php">		
        <input type="text" placeholder="Nombre Propietario" name="nombrepropietario" required value="<?=$cita['nombrepropietario'];?>">
        <input type="text" placeholder="Nombre Mascota"  name="nombremascota" required value="<?=$cita['nombremascota'];?>">
        <input type="text" placeholder="Raza" name="raza" required value="<?=$cita['raza'];?>">                
        <input type="text" placeholder="Edad de la Mascota" name="edadmascota" required value="<?=$cita['edadmascota'];?>">
        <input type="text" placeholder="Fecha de la Cita" name="fechacita" required value="<?=$cita['fechacita'];?>">
        <input type="text" placeholder="Observaciones" name="observaciones" required value="<?=$cita['observaciones'];?>">
        <input type="submit" name="accion" value="actualizar">
    </form>
    
</section>
<?php include_once 'include/piepagina.php'; ?>




