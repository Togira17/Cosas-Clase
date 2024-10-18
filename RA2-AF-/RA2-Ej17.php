<html>
    <head>
        <body>
            <script>

                <?php
                // Crear una función para convertir temperaturas
                function convertirTemperatura($temperatura, $escala = "C") {
                    if ($escala == "C") {
                        // Convertir de Celsius a Fahrenheit
                        return ($temperatura * 9/5) + 32;
                    } elseif ($escala == "F") {
                        // Convertir de Fahrenheit a Celsius
                        return ($temperatura - 32) * 5/9;
                    } else {
                        return "Escala no válida";
                    }
                }

                // Ejemplo de uso
                $temperaturaC = 25; // Celsius
                $temperaturaF = convertirTemperatura($temperaturaC); // Conversión por defecto a Fahrenheit
                echo "La temperatura en Fahrenheit es: " . $temperaturaF . "\n";

                $temperaturaF2 = 77; // Fahrenheit
                $temperaturaC2 = convertirTemperatura($temperaturaF2, "F"); // Conversión a Celsius
                echo "La temperatura en Celsius es: " . $temperaturaC2 . "\n";
                ?>

            </script>
        </body>
    </head>
</html>

