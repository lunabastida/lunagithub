<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Verificar si se envió un ID a eliminar
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_to_delete = $_GET['id'];

    // Eliminar el registro de la base de datos
    $sql = "DELETE FROM anillo WHERE id_anillo = $id_to_delete";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}

$conn->close();
?>