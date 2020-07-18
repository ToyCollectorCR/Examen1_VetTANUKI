<?php include_once 'include/encabezado.php';?>
<section>
    <br>
    <h1>USUARIOS</h1>
    <table id="t1" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Estado</th>
                <th>Rol</th>
                <th>Password</th>
            
            </tr>
        </thead>
        <tbody>
        <?php 
            $listarUsuarios = listarUsuarios();
            if(count($listarUsuarios) >0):  
                foreach ($listarUsuarios as $posicion => $usuario):
        ?>
                <tr>
                    <td><?=$usuario['nombre'];?></td>
                    <td><?=$usuario['cedula'];?></td>
                    <td><?=$usuario['telefono'];?></td>
                    <td><?=$usuario['correo'];?></td>
                    <td><?=$usuario['direccion'];?></td>
                    <td><?=$usuario['estado'];?></td>
                    <td><?=$usuario['rol'];?></td>
                    <td><?=$usuario['password'];?></td>
                    <td><a href="editarUsuario.php?cedula=<?=$usuario['cedula'];?>">Modificar</a></td>
                    <td><a href="mantenimientoUsuarios.php?accion=eliminar&cedula=<?=$usuario['cedula'];?>">Eliminar</a></td>
                </tr>
        <?php
               endforeach;
          endif;
        ?>
        </tbody>
    </table>
</section> 

<section>
    <nav>
        <ul>
            <li><a href="index.php">Regresar al Menu Principal</a></li>
        </ul>
    </nav>
</section>
<?php include_once 'include/piepagina.php'; ?>

