<html>
    <head>
        <body>
            <script>

                <?php
                // Inicializar una variable
                $numero = -1;

                // Usar un bucle do-while para pedir un número positivo
                do {
                    $numero = (int)readline("Ingresa un número positivo: ");
                } while ($numero < 0);

                // Imprimir el número positivo ingresado
                echo "Has ingresado el número positivo: " . $numero;
                ?>

            </script>
        </body>
    </head>
</html>

