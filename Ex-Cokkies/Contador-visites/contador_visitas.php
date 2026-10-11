<?php
$codigo = "";
$contador = 0;
$Codigo_XXX = ($_POST["Codigo-descuento"]);

if (isset($_COOKIE['contador'])){
$contador = $_COOKIE['contador'] + 1;
}

if ($contador == 5){
    $codigo = "BOTIGA20";
}
elseif($contador == 10){
    $codigo = "BOTIGA50";
}
setcookie("contador", $contador, 0,"/");


?>

<!DOCTYPE html>
    <html>
    <head>
</head>
<body>
    
    <p>No has visitado <?php echo $contador; ?> veces.</p>
    <p><?php 
        if ($Codigo_XXX == "BOTIGA20"){
            echo "descuento de BOTIGA20 aplicado";
        }
        elseif($Codigo_XXX == "BOTIGA50"){
            echo "descuento de BOTIGA50 aplicado";
            $contador == 0;
        } 
        ?></p><br>
    <a href="../web.php">Volver a la tienda</a>

</body>
</html>