<html>
    <head>
        <body>
            <script>

                <?php
                // Declaración de la constante de gravedad
                define("GRAVITY", 9.8);

                /**
                 * Esta función calcula la fuerza de gravedad sobre un objeto en la Tierra.
                 * Si el planeta es "Tierra", se multiplica la masa por la gravedad (usando la constante GRAVITY).
                 *
                 * @param string $planeta Nombre del planeta
                 * @param float $masa Masa del objeto
                 * @return string Resultado de la fuerza aplicada
                 */
                function calcularGravedad($planeta, $masa) {
                    // Si el planeta es la Tierra, calcular la fuerza
                    if ($planeta === "Tierra") {
                        // Calcular la fuerza de gravedad
                        $fuerza = $masa * GRAVITY;

                        // Retornar un mensaje con el resultado
                        return "La fuerza de gravedad en la Tierra es: " . $fuerza . " N";
                    } else {
                        // Si no es la Tierra, no se aplica la fórmula
                        return "Este script solo calcula la fuerza de gravedad en la Tierra.";
                    }
                }

                // Ejemplo de uso
                $planeta = "Tierra"; // Nombre del planeta
                $masa = 70; // Masa en kilogramos

                // Mostrar el resultado
                echo calcularGravedad($planeta, $masa);
                ?>

            </script>
        </body>
    </head>
</html>