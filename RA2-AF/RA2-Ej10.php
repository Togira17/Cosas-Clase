<html>
    <head>
        <body>
            <script>

                <?php
                // Pedir al usuario que ingrese su edad
                $edad = (int)readline("Ingresa tu edad: ");

                // Utilizar estructuras if, elseif, else para determinar el rango de edad
                if ($edad < 18) {
                    echo "Eres menor de edad.";
                } elseif ($edad >= 18 && $edad <= 35) {
                    echo "Eres adulto joven.";
                } elseif ($edad >= 36 && $edad <= 65) {
                    echo "Eres adulto.";
                } else {
                    echo "Eres alcalde.";
                }
                ?>

            </script>
        </body>
    </head>
</html>

