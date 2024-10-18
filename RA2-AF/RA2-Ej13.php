<html>
    <head>
        <body>
            <script>

                <?php
                // Crear un array llamado $numeros que contiene los números del 1 al 10
                $numeros = range(1, 10);

                // Crear un nuevo array para almacenar los resultados
                $resultados = [];

                // Usar un bucle foreach para recorrer el array y multiplicar cada número por 2
                foreach ($numeros as $numero) {
                    $resultados[] = $numero * 2;  // Multiplicar por 2 y almacenar en el nuevo array
                }

                // Mostrar ambos arrays
                echo "Números originales: " . implode(", ", $numeros) . "\n";
                echo "Números multiplicados por 2: " . implode(", ", $resultados) . "\n";
                ?>

            </script>
        </body>
    </head>
</html>

