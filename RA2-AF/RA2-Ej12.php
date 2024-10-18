<html>
    <head>
        <body>
            <script>

                <?php
                // Mostrar el menú de opciones
                echo "Selecciona una operación:\n";
                echo "1. Sumar\n";
                echo "2. Restar\n";
                echo "3. Multiplicar\n";
                echo "4. Dividir\n";

                // Leer la opción del usuario
                $opcion = (int)readline("Ingresa el número de la operación deseada (1-4): ");

                // Leer los números para la operación
                $num1 = (float)readline("Ingresa el primer número: ");
                $num2 = (float)readline("Ingresa el segundo número: ");

                // Realizar la operación seleccionada usando switch
                switch ($opcion) {
                    case 1:
                        $resultado = $num1 + $num2;
                        echo "La suma es: " . $resultado;
                        break;
                    case 2:
                        $resultado = $num1 - $num2;
                        echo "La resta es: " . $resultado;
                        break;
                    case 3:
                        $resultado = $num1 * $num2;
                        echo "La multiplicación es: " . $resultado;
                        break;
                    case 4:
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                            echo "La división es: " . $resultado;
                        } else {
                            echo "Error: No se puede dividir por cero.";
                        }
                        break;
                    default:
                        echo "Opción inválida.";
                        break;
                }
                ?>

            </script>
        </body>
    </head>
</html>

