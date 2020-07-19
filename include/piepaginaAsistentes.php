        
        <nav>
            <ul>
            <?php if(isset($_SESSION['usuarioLogueado'])):?>
                <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
            <?php endif;?>
            </ul>
        </nav>
        
        <footer>
        <p>&copy; 2020 Programacion 4 - PHP - Diego Gamboa Segura - PRIMER EXAMEN<p>
        </footer>          
    </body>
</html>