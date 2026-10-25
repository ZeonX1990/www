<?php
session_start();

?>
<html>
    <body>
        <p>Usuari: <?php echo $_SESSION["usuario"]; ?></p>
        
        <p>Esta es la primera pagina de informacion</p>

        <a href="info2.php">Ir a la pagina 2</a>
    </body>
</html>