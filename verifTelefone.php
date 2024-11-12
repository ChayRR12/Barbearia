<?php
include 'db.php';

$telefone = $_GET['telefone'];
$sql = "SELECT nome FROM cliente WHERE telefone = '$telefone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(null);
}

$conn->close();
?>
