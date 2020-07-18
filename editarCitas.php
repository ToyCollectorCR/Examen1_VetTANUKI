<?php 
include_once 'include/encabezado.php'; 


  if(isset($_GET['id'])){
     
      $id  = $_GET['id'];
      $cita = buscarCita($id);

      
  }
?>
<section>
    <br>
    <h3>AQUI PUEDE EDITAR LAS CITAS YA EXISTENTES</h3>
    <form method="post" action="mantenimientoCitas.php">
        <h5>ID - Para Uso Interno</h5>
        <input type="text"  name="id" readonly="" value="<?=$cita['id'];?>"><br>
        <h5>Nombre Propietario</h5>
        <input  type="text" placeholder="Nombre Propietario" name="nombrepropietario" required value="<?=$cita['nombrepropietario'];?>"><br>
        <h5>Nombre Mascota</h5>
        <input type="text" placeholder="Nombre Mascota"  name="nombremascota" required value="<?=$cita['nombremascota'];?>"><br>
        <h5>Raza</h5>
        <input type="text" placeholder="Raza" name="raza" required value="<?=$cita['raza'];?>"><br>                
         <h5>Edad de la Mascota</h5>
        <input type="text" placeholder="Edad de la Mascota" name="edadmascota" required value="<?=$cita['edadmascota'];?>"><br>
        <h5>Fecha de la Cita</h5>
        <input type="text" placeholder="Fecha de la Cita" name="fechacita" required value="<?=$cita['fechacita'];?>"><br>
        <h5>Observaciones</h5>
        <input type="text" placeholder="Observaciones" name="observaciones" required value="<?=$cita['observaciones'];?>"><br><br>
        <input type="submit" name="accion" value="actualizar">
    </form>
    
</section>
<?php include_once 'include/piepagina.php'; ?>




