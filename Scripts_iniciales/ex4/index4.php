<?php 
    $genero = $_POST["estil"];

    switch ($genero){

        case ("rock"):
            echo"Rock and Roll";
            break;

        case ("pop"):
            echo"pop";
            break;

        case ("reggueton"):
            echo"a mover la cadera";
            break;

        case ("electro"):
            echo"full beats";
            break;
    }
?>