<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>Registo de Citas</h1>
    <form method="post" action="mantenimientoCitas.php">		
        <input type="text" placeholder="Nombre Propietario" name="nombrepropietario" required>
        <input type="text" placeholder="Nombre Mascota"  name="nombremascota" required>
        <input type="text" placeholder="Raza" name="raza" required>                
        <input type="text" placeholder="Edad Mascota" name="edadmascota" required>
        <input type="date" placeholder="Fecha Cita" name="fechacita" required>
         <input type="text" placeholder="Causa de la Cita" name="observaciones" required>
        <input type="submit" name="accion" value="registrar">
    </form>
</section>
<?php include_once 'include/piepagina.php'; ?>