<?php
$codigo = "";
$contador = 1;
$Codigo_XXX = ($_POST["Codigo-descuento"]);
$precio = ($_POST["objeto"]);

if (isset($_COOKIE['contador'])){
$contador = $_COOKIE['contador'] + 1;
}

if ($Codigo_XXX == "BOTIGA20" || $Codigo_XXX == "BOTIGA50"){
    $contador = 0;
}
setcookie("contador", $contador, 0,"/");


?>

<!DOCTYPE html>
    <html>
    <head>
</head>
<body>
    
    <p>Nos has visitado <?php echo $contador; ?> veces.</p>
    <p>El objeto vale: <?php echo $precio; ?>€</p>
    <p><?php 
        if ($Codigo_XXX == "BOTIGA20"){
            $precio_descuento = $precio * 0.80;
            echo "descuento de BOTIGA20 aplicado <br>";
            echo "Precio con descuento: " . $precio_descuento . "€";
            $contador == 0;
        }
        elseif($Codigo_XXX == "BOTIGA50"){
            $precio_descuento = $precio * 0.50;
            echo "descuento de BOTIGA50 aplicado <br>";
            echo "Precio con descuento: " . $precio_descuento . "€";
            $contador == 0;
        } 
        ?></p><br>
    <a href="../web.php">Volver a la tienda</a>

</body>
</html>