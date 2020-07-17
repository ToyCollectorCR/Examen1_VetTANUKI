<?php include_once 'include/encabezado.php'; ?>
<section>
    <br>
    <h1>Registo de Usuarios</h1>
    <form method="post" action="mantenimientoUsuarios.php">		
        <input type="text" placeholder="Nombre" name="nombre" required> <br>
        <input type="text" placeholder="Cedula"  name="cedula" required> <br>
        <input type="text" placeholder="Telefono" name="telefono" required>  <br>              
        <input type="text" placeholder="Correo" name="correo" required><br>
        <input type="text" placeholder="Direccion" name="direccion" required> <br>
        <input type="text" value="inactivo" name="estado" readonly=""> <br>
        <input type="text" placeholder="Rol" name="rol" required> <br>
        <input type="text" placeholder="Password" name="password" required> <br><br>
        <input type="submit" name="accion" value="registrar">
    </form>
</section>
<?php include_once 'include/piepagina.php'; ?>