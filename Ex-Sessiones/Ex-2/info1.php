<?php
session_start();

?>
<html>
    <body>
        <p>Usuari: <?php echo $_SESSION["usuario"]; ?></p>
        <a href="exit.php">Desconnectar-se</a>
        <p>Esta es la primera pagina de informacion</p>

        <a href="info2.php">Ir a la pagina 2</a>
    </body>
</html>