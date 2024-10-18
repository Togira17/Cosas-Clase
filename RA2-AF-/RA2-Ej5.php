<html>
    <head>
        <body>
            <script>

                <?php
                // Crear un array multidimensional llamado $alumnos
                $alumnos = [
                    [
                        "nombre" => "Juan",
                        "edad" => 20,
                        "materias" => [
                            "Matemáticas" => 8,
                            "Historia" => 7,
                            "Inglés" => 9
                        ]
                    ],
                    [
                        "nombre" => "María",
                        "edad" => 21,
                        "materias" => [
                            "Matemáticas" => 9,
                            "Historia" => 8,
                            "Inglés" => 10
                        ]
                    ],
                    [
                        "nombre" => "Pedro",
                        "edad" => 19,
                        "materias" => [
                            "Matemáticas" => 6,
                            "Historia" => 9,
                            "Inglés" => 7
                        ]
                    ]
                ];

                // Función para calcular el promedio de las calificaciones
                function calcularPromedio($materias) {
                    $total = array_sum($materias);
                    return $total / count($materias);
                }

                // Mostrar la información de cada alumno y su calificación promedio
                foreach ($alumnos as $alumno) {
                    echo "Nombre: " . $alumno["nombre"] . "<br>";
                    echo "Edad: " . $alumno["edad"] . "<br>";
                    
                    $promedio = calcularPromedio($alumno["materias"]);
                    echo "Promedio de calificaciones: " . $promedio . "<br><br>";
                }
                ?>

            </script>
        </body>
    </head>
</html>