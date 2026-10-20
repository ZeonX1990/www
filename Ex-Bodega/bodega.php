<?php
$edad   = $_POST["edad"];
$idioma = $_POST["idioma"];
$moneda = $_POST["moneda"];
$precio = $_POST["vino"];

setcookie("majoredat", $edad, 0, "/");
setcookie("idioma", $idioma, 0, "/");
setcookie("moneda", $moneda, 0, "/");
setcookie("vino", $precio, 0, "/");

if ($precio == 10) {
    $nombre_vino = "Les Terrasses";
} else {
    $nombre_vino = "Virgara";
}

if ($edad == 1) { 

    switch ($moneda) {
        case 1:
            $precio_final = $precio;
            $simbolo = "€";
            break;
        case 2:
            $precio_final = $precio * 0.85;
            $simbolo = "£";
            break;
        case 3:
            $precio_final = $precio * 1.10;
            $simbolo = "$";
            break;
    }

    switch ($idioma) {
        case 1:
            echo "T'oferim el vi '$nombre_vino' a un preu de $precio_final $simbolo";
            break;
        case 2:
            echo "Te ofrecemos el vino '$nombre_vino' a un precio de $precio_final $simbolo";
            break;
        case 3:
            echo "We offer you the wine '$nombre_vino' at a price of $precio_final $simbolo";
            break;
    }
}
else
echo "No te podemos vender alcohol si eres menor de edad" 



?>

