<html>
    <head>
        <body>
            <script>

                <?php
                // Declarar una variable de tipo cadena que contiene un número
                $numeroCadena = "25";

                // Imprimir la variable antes de la conversión usando var_dump()
                echo "Antes de la conversión: ";
                var_dump($numeroCadena);

                // Convertir la variable a tipo entero
                $numeroEntero = (int)$numeroCadena;

                // Sumar el número convertido a otro número
                $otroNumero = 10;
                $resultado = $numeroEntero + $otroNumero;

                // Imprimir la variable después de la conversión y el resultado de la suma
                echo "<br>Después de la conversión: ";
                var_dump($numeroEntero);

                echo "<br>Resultado de la suma: " . $resultado;
                ?>

            </script>
        </body>
    </head>
</html>