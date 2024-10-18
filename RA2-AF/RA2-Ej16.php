<html>
    <head>
        <body>
            <script>

                <?php
                // Definir una función que acepte una variable por referencia
                function incrementarPorValor(&$numero) {
                    $numero += 10;  // Incrementar el valor en 10
                }

                // Variable inicial
                $miNumero = 5;

                // Mostrar el valor antes de llamar a la función
                echo "Antes de la función: " . $miNumero . "\n";

                // Llamar a la función pasando la variable
                incrementarPorValor($miNumero);

                // Mostrar el valor después de llamar a la función
                echo "Después de la función: " . $miNumero . "\n";
                ?>

            </script>
        </body>
    </head>
</html>

