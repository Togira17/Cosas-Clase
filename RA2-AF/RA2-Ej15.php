<html>
    <head>
        <body>
            <script>

                <?php
                // Definir dos arrays
                $array1 = ["rojo", "verde", "azul"];
                $array2 = ["verde", "amarillo", "azul"];

                // Usar array_diff() para determinar qué colores están en $array1 pero no en $array2
                $diferencias = array_diff($array1, $array2);

                // Imprimir el resultado
                echo "Colores en \$array1 pero no en \$array2: " . implode(", ", $diferencias) . "\n";
                ?>

            </script>
        </body>
    </head>
</html>

