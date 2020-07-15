<?php include_once 'include/encabezado.php';?>
<section>
    <br>
    <h1>CITAS</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Propietario</th>
                <th>Nombre Mascota</th>
                <th>Raza</th>
                <th>Edad Mascota</th>
                <th>Fecha De La Cita</th>
                <th>Observaciones</th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
            $listarCitas = listarCitas();
            if(count($listarCitas) >0):  
                foreach ($listarCitas as $posicion => $cita):
        ?>
                <tr>
                    <td><?=$cita['id'];?></td>
                    <td><?=$cita['nombrepropietario'];?></td>
                    <td><?=$cita['nombremascota'];?></td>
                    <td><?=$cita['raza'];?></td>
                    <td><?=$cita['edadmascota'];?></td>
                    <td><?=$cita['fechacita'];?></td>
                    <td><?=$cita['observaciones'];?></td>
                    <td><a href="editar.php?nombre=<?=$producto['nombre'];?>">Editar</a></td>
                    <td><a href="manteProductos.php?accion=eliminar&nombre=<?=$producto['nombre'];?>">Borrar</a></td>
                </tr>
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
</section> 
<?php include_once 'include/piepagina.php'; ?>