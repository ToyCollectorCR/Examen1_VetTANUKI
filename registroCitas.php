<?php include_once 'include/encabezado.php'; ?>
<section>

    <br>
    <h1>Registo de Citas</h1>
  
    <form method="post" action="mantenimientoCitas.php">
        
    

        <table id="t1" border="1">
        <thead>
            <tr>
                
                <th>Nombre Propietario</th>
                <th>Nombre Mascota</th>
                <th>Raza</th>
                <th>Edad Mascota</th>
                <th>Fecha De La Cita</th>
                <th>Observaciones</th>
                <th>Accion</th>
                
            </tr>
        </thead>
        <tbody>
        <td><input type="text" placeholder="Nombre Completo" name="nombrepropietario" required></td>
        <td><input type="text"   name="nombremascota" required></td>
        <td><input type="text" placeholder="Pastor Aleman" name="raza" required></td>               
        <td><input type="text" placeholder="Digitar Años Ó Meses" name="edadmascota" required></td>
        <td><input type="date"  name="fechacita" required></td>
        <td><input type="text" placeholder="Motivo De Visita" name="observaciones" required></td>
        <td><input type="submit" name="accion" value="registrar"></td>
        </tbody>
       </table>    

        
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