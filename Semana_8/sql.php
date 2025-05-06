<?php
include 'db.php';

$sql = "SELECT cliente, fecha, habitacion, estado FROM reservas ORDER BY fecha DESC LIMIT 4";
$result = $conn->query($sql);

echo "<table>";
echo "<tr><th>Cliente</th><th>Fecha</th><th>Habitación</th><th>Estado</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["cliente"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["fecha"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["habitacion"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["estado"]) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay reservas registradas</td></tr>";
}

echo "</table>";

$conn->close();
?>