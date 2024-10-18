<html>
    <head>
        <body>
            <script>

                <?php
                // Crear un array de números del 1 al 5
                $numeros = range(1, 5);

                // Usar array_map con una función anónima para elevar cada número al cuadrado
                $cuadrados = array_map(function($numero) {
                    return $numero * $numero;  // Elevar al cuadrado
                }, $numeros);

                // Imprimir el array original y el nuevo array
                echo "Array original: " . implode(", ", $numeros) . "\n";
                echo "Array de cuadrados: " . implode(", ", $cuadrados) . "\n";
                ?>

            </script>
        </body>
    </head>
</html>

