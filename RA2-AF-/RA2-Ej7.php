<html>
    <head>
        <body>
            <script>

                <?php
                // Declarar una variable con un valor inicial de 100
                $valor = 100;

                // Usar operadores de asignación para modificar el valor en diferentes etapas
                $valor += 20;  // Sumar 20 (resultado: 120)
                $valor -= 10;  // Restar 10 (resultado: 110)
                $valor *= 2;   // Multiplicar por 2 (resultado: 220)
                $valor /= 4;   // Dividir por 4 (resultado: 55)

                // Usar una condicional if para determinar si el valor final es mayor, menor o igual a 100
                if ($valor > 100) {
                    echo "El valor final es mayor que 100. Valor actual: " . $valor;
                } elseif ($valor < 100) {
                    echo "El valor final es menor que 100. Valor actual: " . $valor;
                } else {
                    echo "El valor final es exactamente 100.";
                }
                ?>

            </script>
        </body>
    </head>
</html>