<?php
session_start();

// Si pulsan el botón de pagar, borramos la sesión y mostramos mensaje
if (isset($_POST["pagar"])) {
    session_destroy();
    echo "Compra pagada con éxito";
    echo '<a href="index.html">Volver a la tienda';
    exit;
}
// Recuperamos cantidades de forma segura (si no hay nada, valen 0)
$pomes = $_SESSION["pomes"] ?? 0;
$peres = $_SESSION["peres"] ?? 0;

$total = ($pomes * 2) + ($peres * 3);
?>
<html>
    <head>
    </head>
    <body>
        <h1>Resumen de la Compra</h1>

        <p>Manzanas: <?php echo $pomes; ?> (2€ cada una)</p>
        <p>Peras: <?php echo $peres; ?> (3€ cada una)</p>
        
        <h3>Total a pagar: <?php echo $total; ?> €</h3>

        <!-- Botón para pagar -->
        <form action="finalizar.php" method="POST">
            <input type="submit" name="pagar" value="Pagar">
        </form>

        <br>
        <a href="cistella_compra.php">Volver a la cesta</a>
    </body>
</html>