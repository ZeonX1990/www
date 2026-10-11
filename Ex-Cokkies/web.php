<html>
    <head>
    </head>
    <body>
        <form action="/Ex-Cokkies/Contador-visites/contador_visitas.php" method="post">
            Codigo: <input type="text" name="Codigo-descuento">
            <input type="submit" value="Comprar">
            
        </form>

        <?php
    
        if (isset($_COOKIE['contador']) && $_COOKIE['contador'] == 5) {
        echo '<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>';
        }
        ?>
    
    </body>
    </html>