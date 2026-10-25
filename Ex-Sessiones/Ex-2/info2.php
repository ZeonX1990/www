<?php
session_start();

?>
<html>
    <body>
        <p>Usuari: <?php echo $_SESSION["usuario"]; ?></p>
        <a href="exit.php">Desconnectar-se</a>
        <p>Esta es la segunda pagina de informacion</p>

        <a href="info1.php">Ir a la pagina 1</a>
    </body>
</html>