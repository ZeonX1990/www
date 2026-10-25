<?php
session_start();

// Si la sesión no existe todavía, la inicializamos a 0
if (!isset($_SESSION["pomes"])) {
    $_SESSION["pomes"] = 0;
    $_SESSION["peres"] = 0;
}

// Si se ha enviado el formulario, sumamos de forma segura
if (isset($_POST["poma"])) {
    $_SESSION["pomes"] += $_POST["poma"] ?? 0;
    $_SESSION["peres"] += $_POST["pera"] ?? 0;
}
?>
<html>
    <head>
    </head>
    <body>
        <h1>Tu Cesta</h1>

        Manzanas en la cesta: <?php echo $_SESSION["pomes"]; ?><br>
        Peras en la cesta: <?php echo $_SESSION["peres"]; ?><br><br>

        <a href="index.html">Comprar más productos</a><br>
        <a href="finalizar.php">Finalizar compra</a>
    </body>
</html>