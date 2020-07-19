<?php include_once 'include/encabezado.php';?>

<section>
    <br>
    <h1>MENU PRINCIPAL</h1>
            <nav>
            <ul>
            <?php if(isset($_SESSION['usuarioLogueado'])):?>
                
                <li><a href="listarCistasAsistentes.php">Listado de Citas</a></li>
                
            <?php endif;?>
            </ul>
            </nav>
    
</section> 


         

<?php include_once 'include/piepagina.php'; ?>
