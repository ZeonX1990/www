<?php
session_start();

$usuario = $_POST["usuario"];
$pwd     = $_POST["pwd"];

if ($usuario == $pwd) {
    
    $_SESSION["usuario"] = $usuario;

    header("Location: info1.php");

} else {
    
    header("Location: index.html");
}
?>