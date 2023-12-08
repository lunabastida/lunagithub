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

$id_to_modify = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_to_update = $_POST['id'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
    $nuevo_material = $_POST['nuevo_material'];
    $nuevo_unidades = $_POST['nuevo_unidades'];
  

    $sql = "UPDATE anillo SET nombre='$nuevo_nombre', material='$nuevo_material', unidades='$nuevo_unidades' WHERE id_anillo=$id_to_update";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_to_modify = $_GET['id'];

    $sql = "SELECT * FROM anillo WHERE id_anillo = $id_to_modify";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nombre = $row['nombre'];
        $material = $row['material'];
        $unidades = $row['unidades'];
      
    } else {
        echo "Registro no encontrado.";
    }
}

$conn->close();
?>