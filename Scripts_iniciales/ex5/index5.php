<?php 
    $preu = $_POST["preu"];
    $iva = $_POST["iva"];

    echo "precio inicial " .$preu. " * " .$iva. "% de IVA =" .($preu + ($preu * ($iva / 100)));

?>