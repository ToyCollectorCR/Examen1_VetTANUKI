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
        <table id="t1" border="1">
            <thead>
                
                <tr>
                    <th>ID</th>
                    <th>Nombre Propietario</th>
                    <th>Nombre Mascota</th>
                    <th>Raza</th>
                    <th>Edad de la Mascota</th>
                    <th>Fecha de la Cita</th>
                    <th>Observaciones</th>
                    <th>Accion</th>
                    
                </tr>

            </thead>
            
            <tbody>
                
                <td><input type="text"  name="id" readonly="" value="<?=$cita['id'];?>"></td>       
                <td><input  type="text" placeholder="Nombre Propietario" name="nombrepropietario" required value="<?=$cita['nombrepropietario'];?>">  </td>      
                <td><input type="text" placeholder="Nombre Mascota"  name="nombremascota" required value="<?=$cita['nombremascota'];?>"></td>       
                <td><input type="text" placeholder="Raza" name="raza" required value="<?=$cita['raza'];?>"> </td>       
                <td><input type="text" placeholder="Edad de la Mascota" name="edadmascota" required value="<?=$cita['edadmascota'];?>"></td>
                <td><input type="date" name="fechacita" required value="<?=$cita['fechacita'];?>"></td>
                <td><input type="text" placeholder="Observaciones" name="observaciones" required value="<?=$cita['observaciones'];?>"></td>
                <td><input type="submit" name="accion" value="actualizar"></td>
                
            </tbody>
        </table>
        

    </form>
    
</section>
<?php include_once 'include/piepagina.php'; ?>




