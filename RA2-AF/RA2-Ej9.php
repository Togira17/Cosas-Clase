<html>
    <head>
        <body>
            <script>

                <?php
                // Definir una variable llamada calificacion con un valor numérico
                $calificacion = 85;

                // Usar un operador ternario anidado para determinar el nivel de la calificación
                $resultado = ($calificacion >= 90 && $calificacion <= 100) ? "Sobresaliente" : 
                            (($calificacion >= 70 && $calificacion < 90) ? "Buena" : "Necesita mejorar");

                // Imprimir el resultado
                echo "La calificación es: " . $resultado;
                ?>

            </script>
        </body>
    </head>
</html>

