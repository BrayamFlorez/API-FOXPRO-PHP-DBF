<?php
// Incluye el archivo de diccionario con los índices de las columnas
include 'diccionario.php';

try {
    // Configuración de la conexión ODBC
    $dsn = 'odbc:Driver={Microsoft Visual FoxPro Driver};SourceDB=C:\foxpro\;SourceType=DBF;';
    $pdo = new PDO($dsn);

    // Verifica si se recibió el parámetro 'cedula' en la petición GET
    if (!isset($_GET['cedula']) || empty($_GET['cedula'])) {
        die('No se proporcionó el número de cédula.');
    }

    // Sanitiza el valor de la cédula para prevenir inyección SQL
    $cedula = htmlspecialchars($_GET['cedula'], ENT_QUOTES, 'UTF-8');

    // Consulta SQL
    $query = "SELECT * FROM historia WHERE Cedula = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$cedula]);

    // Verifica si la consulta fue exitosa
    if (!$stmt) {
        print_r($pdo->errorInfo());
        die('Error en la consulta.');
    }

    // Procesa los resultados
    $results = $stmt->fetchAll(PDO::FETCH_NUM); // Usa PDO::FETCH_NUM para obtener resultados por índice

    if ($results) {
        $data = [];

        // Invierte el diccionario para que sea más fácil mapear los índices con los nombres
        $flippedDict = array_flip($column_dict);

        foreach ($results as $row) {
            $rowData = [];
            foreach ($row as $key => $value) {
                // Asocia el índice al nombre de columna usando el diccionario
                if (isset($flippedDict[$key])) {
                    $columnName = $flippedDict[$key];
                    $rowData[$columnName] = htmlspecialchars($value); // Escapa los caracteres especiales
                }
            }
            $data[] = $rowData;
        }

        // Establece el encabezado para JSON y envía la respuesta
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        // Devuelve un JSON indicando que no hay resultados
        header('Content-Type: application/json');
        echo json_encode(['message' => 'No se encontraron resultados.']);
    }
} catch (PDOException $e) {
    die('Error de conexión o consulta: ' . $e->getMessage());
}
?>
