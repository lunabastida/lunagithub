*<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slj";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//equal= NEw 
if ($_SERVER["REQUEST_METHOD"] == "POST") {//desicion 
  // collect value of input field
  $a1 = $_POST['nombre'];
  if (empty($a1)) {
    echo "La caja del nombre esta vacia";
  } else {
    echo $a1;
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $a2 = $_POST['material'];
    if (empty($a2)) {
      echo "La caja del nombre esta vacia";
    } else {
      echo $a2;
    }
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $a3 = $_POST['unidades'];
  if (empty($a3)) {
    echo "La caja del nombre esta vacia";
  } else {
    echo $a3;
  }
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO anillo (nombre, material, unidades)
VALUES ('".$a1."', '".$a2."','".$a3."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "Connected successfully";
$conn->close();
?>