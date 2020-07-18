<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>Registo de Usuarios</h1>
    <form method="post" action="mantenimientoUsuarios.php">		
       <h5>Nombre</h5>
        <input type="text" placeholder="Nombre" name="nombre" required>
       <h5>Cedula</h5>
        <input type="text" placeholder="Cedula"  name="cedula" required>
        <h5>Telefono</h5> 
        <input type="text" placeholder="Telefono" name="telefono" required>  
         <h5>Correo</h5>
        <input type="text" placeholder="Correo" name="correo" required>
         <h5>Direccion</h5>
        <input type="text" placeholder="Direccion" name="direccion" required> 
         <h5>Estado(Inactivo Por Default)</h5>
        <input type="text" value="inactivo" name="estado" readonly="">
         <h5>Rol</h5>
        <input type="text" placeholder="Rol" name="rol" required>
         <h5>Contraseña</h5>
        <input type="text" placeholder="Password" name="password" required>
        <input type="submit" name="accion" value="registrar">
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