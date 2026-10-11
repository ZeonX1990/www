<?php 

    $hora = date("H:i");

    if($hora >= "5:00" && $hora < "14:00") {
        echo "Buenos días Hora del servidor ". date("H:i:s");
    }
    elseif ($hora >= "14:00" && $hora < "19:00") {
        echo "Buenas tardes Hora del servidor ". date("H:i:s");
    }
    else {
        echo "Buenas noches Hora del servidor ". date("H:i:s");
    }
?>