<html>
    <head>
        <body>
            <script>

                <?php
                // Verificar si el formulario fue enviado
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Recoger el nombre ingresado
                    $nombre = htmlspecialchars($_POST['nombre']);
                    // Mostrar el nombre ingresado
                    echo "<h2>Hola, " . $nombre . "!</h2>";
                }

                // Imprimir el formulario HTML usando echo
                echo '
                    <form method="post" action="">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                        <input type="submit" value="Enviar">
                    </form>
                ';
                ?>

            </script>
        </body>
    </head>
</html>