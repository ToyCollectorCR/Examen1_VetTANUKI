<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>Registo de Usuarios</h1>
    <form method="post" action="mantenimientoUsuarios.php">
        
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
                <th>Acción</th>
                
                </tr>
            </thead>
            <tbody>
                <td><input type="text" placeholder="Nombre Completo" name="nombre" required></td>
       
                <td><input type="text" placeholder="112341234"  name="cedula" required></td>
         
                <td><input type="text" placeholder="Fijo Ó Celular" name="telefono" required></td>  
         
                <td><input type="text" placeholder="usuario@usuario" name="correo" required></td>
         
                <td><input type="text" placeholder="Lo Mas Exacta" name="direccion" required></td> 
         
                <td><input type="text" value="inactivo" name="estado" readonly=""></td>
         
                <td><input type="text" placeholder="administrador/asistente" name="rol" required></td>
         
                <td><input type="password" placeholder="12@24_AA" name="password" required></td>
                
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