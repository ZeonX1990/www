<html>
    <head>
    </head>
    <body>
        <form action="/Ex-Cokkies/Contador-visites/contador_visitas.php" method="post">
            
        <p>Objeto:<p> 
            <select name="objeto">
                <option value="20">Camiseta - 20€</option>
                <option value="50">Zapatillas - 50€</option>
            </select>
            <br>
            Codigo: <input type="text" name="Codigo-descuento">
            <input type="submit" value="Comprar">
            
        </form>

        <?php
    
        if (isset($_COOKIE['contador']) && $_COOKIE['contador'] == 5) {
        echo '<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>';
        }
        elseif (isset($_COOKIE['contador']) && $_COOKIE['contador'] == 10) {
        echo '<p>Oferta exclusiva! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>';
        }

        ?>
    
    </body>
    </html>