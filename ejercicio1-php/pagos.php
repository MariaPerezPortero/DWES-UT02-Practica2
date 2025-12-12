<!-- ******************************************************************************************* -->

<!-- DOCUMENTACIÓN DE PHP SOBRE LOS ARRAYS -->
<!-- ************************************* -->

<!-- EXPLICACIÓN DE ARRAY -->
<!-- ******************** -->

<!--
  Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo que asocia valores a claves. 
  Este tipo está optimizado para varios usos diferentes; puede ser tratado como un array, lista [vector], 
  tabla hash [una implementación de un mapa], diccionario, colección, pila, cola, y probablemente más.
  Como los valores array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales.
-->

<!-- ARRAY INDEXADO -->
<!-- ************** -->

<!--
  En PHP, un array indexado es una colección de elementos en la que cada elemento 
  tiene asignado un número de índice, comenzando por 0. Este tipo de arrays es 
  muy útil cuando necesitas almacenar múltiples valores en una sola variable.
-->

<!-- ARRAY ASOCIATIVO -->
<!-- **************** -->

<!--
  Los arrays asociativos en PHP permiten almacenar pares de clave-valor. 
  A diferencia de los arrays indexados, donde cada elemento tiene un número de índice, 
  en los arrays asociativos las claves son valores que se asignan a cada elemento.
-->


<!-- ARRAY MULTIDIMENSIONAL -->
<!-- ********************** -->

<!--
  Un array multidimensional es un array que contiene uno o más arrays dentro de él. 
  PHP soporta arrays multidimensionales de varios niveles [dos, tres, cuatro o más], 
  pero los arrays con más de tres dimensiones suelen ser difíciles de manejar.
-->

<!-- ******************************************************************************************* -->

<!-- Hoja PHP -->
<?php

// Array asociativo multidimensional
$socios = [
     1 => [
        "id" => 1,
        "nombre" => "Maria",
        "apellidos" => "Perez",
        "dni" => "12345678M",
        "email" => "mperez@email.com",
        "telefono" => "609174856",
        "pagos" => [
            "2025-01" => ["mes" => "Enero",      "importe" => 50, "estado" => "Pagado",    "fecha_pago" => "2025-01-15"],
            "2025-02" => ["mes" => "Febrero",    "importe" => 50, "estado" => "Pendiente", "fecha_pago" => null],
            "2025-03" => ["mes" => "Marzo",      "importe" => 10, "estado" => "Pagado",    "fecha_pago" => "2025-03-03"],
            "2025-04" => ["mes" => "Abril",      "importe" => 30, "estado" => "Pagado",    "fecha_pago" => "2025-04-08"],
            "2025-05" => ["mes" => "Mayo",       "importe" => 70, "estado" => "Pendiente", "fecha_pago" => null],
            "2025-06" => ["mes" => "Junio",      "importe" => 5,  "estado" => "Pendiente", "fecha_pago" => null],
            "2025-07" => ["mes" => "Julio",      "importe" => 40, "estado" => "Pagado",    "fecha_pago" => "2025-07-23"],
            "2025-08" => ["mes" => "Agosto",     "importe" => 50, "estado" => "Pagado",    "fecha_pago" => "2025-08-15"],
            "2025-09" => ["mes" => "Septiembre", "importe" => 20, "estado" => "Pendiente", "fecha_pago" => null],
            "2025-10" => ["mes" => "Octubre",    "importe" => 16, "estado" => "Pagado",    "fecha_pago" => "2025-10-14"],
            "2025-11" => ["mes" => "Noviembre",  "importe" => 22, "estado" => "Pagado",    "fecha_pago" => "2025-11-11"],
            "2025-12" => ["mes" => "Diciembre",  "importe" => 33, "estado" => "Pendiente", "fecha_pago" => null]
        ]
        ],
    2 => [
        "id" => 2,
        "nombre" => "Hector",
        "apellidos" => "Baztan",
        "dni" => "87654321B",
        "email" => "hbaztan@email.com",
        "telefono" => "123456789",
        "pagos" => [
            "2025-01" => ["mes" => "Enero",      "importe" => 50, "estado" => "Pendiente", "fecha_pago" => null],
            "2025-02" => ["mes" => "Febrero",    "importe" => 50, "estado" => "Pagado",    "fecha_pago" => "2025-02-15"],
            "2025-03" => ["mes" => "Marzo",      "importe" => 25, "estado" => "Pagado",    "fecha_pago" => "2025-03-15"],
            "2025-04" => ["mes" => "Abril",      "importe" => 30, "estado" => "Pendiente", "fecha_pago" => null],
            "2025-05" => ["mes" => "Mayo",       "importe" => 60, "estado" => "Pagado",    "fecha_pago" => "2025-05-04"],
            "2025-06" => ["mes" => "Junio",      "importe" => 14,  "estado" => "Pagado",   "fecha_pago" => "2025-06-12"],
            "2025-07" => ["mes" => "Julio",      "importe" => 40, "estado" => "Pagado",    "fecha_pago" => "2025-07-23"],
            "2025-08" => ["mes" => "Agosto",     "importe" => 50, "estado" => "Pendiente", "fecha_pago" => null],
            "2025-09" => ["mes" => "Septiembre", "importe" => 30, "estado" => "Pagado",    "fecha_pago" => "2025-09-23"],
            "2025-10" => ["mes" => "Octubre",    "importe" => 16, "estado" => "Pendiente", "fecha_pago" => null],
            "2025-11" => ["mes" => "Noviembre",  "importe" => 30, "estado" => "Pagado",    "fecha_pago" => "2025-11-22"],
            "2025-12" => ["mes" => "Diciembre",  "importe" => 33, "estado" => "Pendiente", "fecha_pago" => null]
        ]
    ],
];

$socio = $socios[1];
$totalAbonado = 0;
$filasTabla = "";

// Iteración del array asociativo multidimensional
foreach ($socio["pagos"] as $pago) {
    $clase = ($pago["estado"] === "Pendiente") ? "pendiente" : "";

    if ($pago["estado"] === "Pagado") {
        $totalAbonado += $pago["importe"];
    }

    $filasTabla .= "
        <tr class='$clase'>
            <td>{$pago['mes']}</td>
            <td>{$pago['importe']} €</td>
            <td>{$pago['estado']}</td>
            <td>" . ($pago['fecha_pago'] ?: "-") . "</td>
        </tr>
    ";
}
?>

<!-- Hoja de HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagos del Socio</title>

    <!-- Estilos de la tabla -->
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
        .pendiente {
            background-color: #f8d7da;
            color: #a00000;
            font-weight: bold;
        }
    </style>
</head>

<body>

<!-- Información básica del socio -->
<h2>Datos del Socio</h2>
<p><strong>Nombre:</strong> <?= $socio["nombre"] . " " . $socio["apellidos"] ?></p>
<p><strong>DNI:</strong> <?= $socio["dni"] ?></p>
<p><strong>Teléfono:</strong> <?= $socio["telefono"] ?></p>
<p><strong>Email:</strong> <?= $socio["email"] ?></p>

<h2>Pagos del Año</h2>

<!-- Tabla de los pagos -->
<table>
    <tr>
        <th>Mes</th>
        <th>Importe</th>
        <th>Estado</th>
        <th>Fecha de pago</th>
    </tr>

    <?= $filasTabla ?>

</table>

<!-- Importe total abonado -->
<h3>Total abonado en el año: <?= $totalAbonado ?> €</h3>

</body>
</html>
