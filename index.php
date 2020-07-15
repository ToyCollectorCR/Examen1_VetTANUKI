<?php include_once 'include/encabezado.php';?>

<section>
    <br>
    <h1>MENU PRINCIPAL</h1>
            <nav>
            <ul>
            <?php if(isset($_SESSION['usuarioLogueado'])):?>
                
                <li><a href="listarCitas.php">Listar Citas</a></li>
                <li><a href="cerrarSesion.php">Registrar Cita</a></li>
                
                <li><a href="registrar.php">Registrar Usuario</a></li>
                <li><a href="index.php">Activar/Desactivar Usuario</a></li>
                
            <?php endif;?>
            </ul>
            </nav>
    
</section> 


         

<?php include_once 'include/piepagina.php'; ?>






