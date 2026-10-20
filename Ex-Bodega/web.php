<html>
    <head>
    </head>
    <body>
        <form action="bodega.php" method="POST">
            Eres mayor de edad?<br>
            Si <input type="radio" name="edad" value="1"><br>
            No <input type="radio" name="edad" value="2"><br>
            <br>
            Idioma?<br>
            Catalan <input type="radio" name="idioma" value="1">
            Espanol <input type="radio" name="idioma" value="2">
            Ingles <input type="radio" name="idioma" value="3">
            <br>
            <br>
            Moneda:<br>
            Euro <input type="radio" name="moneda" value="1">
            Libra <input type="radio" name="moneda" value="2">
            Dolares <input type="radio" name="moneda" value="3">
            <br>
            <br>
            vino
            <select name="vino">
                <option value="10">La tierra(10 anos) 20€</option>
                <option value="1000">Virgara (50 anos) 1000€</option>
            </select><br>
            <input type="submit" value="comprar">

        </form>
    </body>
</html>