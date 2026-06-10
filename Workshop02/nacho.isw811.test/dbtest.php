<?php

$host = "localhost";
$dbname = "workshop02";
$user = "workshop_user";
$pass = "Workshop2026!";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
    );

    echo "<h1>Conexión exitosa a MariaDB</h1>";

    $stmt = $pdo->query(
        "SELECT * FROM estudiantes"
    );

    echo "<h2>Estudiantes registrados</h2>";

    echo "<ul>";

    while ($row = $stmt->fetch()) {

        echo "<li>"
            . $row['id']
            . " - "
            . $row['nombre']
            . "</li>";
    }

    echo "</ul>";

} catch(PDOException $e) {

    echo "Error: " . $e->getMessage();
}
?>
