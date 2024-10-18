<html>
    <head>
        <body>
            <script>

                <?php
                // Definir una constante TASA_INTERES
                define("TASA_INTERES", 0.05);

                // Verificar si el formulario fue enviado
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Obtener la cantidad principal ingresada por el usuario
                    $principal = (float)$_POST['principal'];

                    // Calcular el interés simple después de un año
                    $interes = $principal * TASA_INTERES;

                    // Imprimir el resultado con formato adecuado
                    echo "Cantidad principal: $" . number_format($principal, 2) . "<br>";
                    echo "Interés generado después de un año: $" . number_format($interes, 2);
                }
                ?>

                <!-- Formulario HTML para ingresar la cantidad principal -->
                <form method="post" action="">
                    <label for="principal">Cantidad principal:</label>
                    <input type="number" step="0.01" id="principal" name="principal" required>
                    <input type="submit" value="Calcular Interés">
                </form>

            </script>
        </body>
    </head>
</html>