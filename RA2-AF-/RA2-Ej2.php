<html>
    <head>
        <body>
            <script>

                <?php
                /*
                Este script contiene una función para calcular el área de un rectángulo.
                Se utilizan dos parámetros: ancho y alto. La función devuelve el resultado
                del área que es calculado multiplicando el ancho por el alto.
                */

                // Función para calcular el área de un rectángulo
                function calcularAreaRectangulo($ancho, $alto) {
                    // Multiplica el ancho por el alto para obtener el área
                    $area = $ancho * $alto;

                    // Devuelve el resultado del área
                    return $area;
                }

                // Ejemplo de uso de la función
                $ancho = 5; // Ancho del rectángulo
                $alto = 10; // Alto del rectángulo

                // Imprimir el área calculada
                echo "El área del rectángulo es: " . calcularAreaRectangulo($ancho, $alto);
                ?>

            </script>
        </body>
    </head>
</html>