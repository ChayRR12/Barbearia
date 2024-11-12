<?php

include 'db.php';

$horario = $_GET['horario'];
$sql = "SELECT COUNT(*) AS count FROM cliente WHERE horario = '$horario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row['count'] > 0);
} else {
    echo json_encode(false);
}

$conn->close();
?>
