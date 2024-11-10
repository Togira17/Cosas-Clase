<html>
    <head>
        <body>
            <script>

                <?php
                // Definir un array multidimensional que contiene la información de tres productos
                $productos = [
                    ["nombre" => "Producto A", "precio" => 10.5, "cantidad_en_stock" => 3],
                    ["nombre" => "Producto B", "precio" => 15.0, "cantidad_en_stock" => 5],
                    ["nombre" => "Producto C", "precio" => 20.0, "cantidad_en_stock" => 2],
                ];

                // Calcular el valor total de cada producto y mostrar los resultados
                foreach ($productos as $producto) {
                    $valor_total = $producto["precio"] * $producto["cantidad_en_stock"];
                    echo "El valor total de " . $producto["nombre"] . " es: " . $valor_total . "\n";
                }
                ?>

            </script>
        </body>
    </head>
</html>

