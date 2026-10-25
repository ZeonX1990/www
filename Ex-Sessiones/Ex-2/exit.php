<?php
session_start();
session_destroy(); // Destrueix totes les dades de la sessió
header("Location: index.html"); // Torna al login
?>