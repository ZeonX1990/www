<?php

    if (!empty($_POST["Euros"])) {
        
        echo "Euros a Dolares: " . ($_POST["Euros"] * 1.14) . "$ <br>";
    }

    if (!empty($_POST["Dolars"])) {
        echo "Dolares a Euros: " . ($_POST["Dolars"] * 0.86) . "€";
    }
?>