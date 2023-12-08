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

$sql = "SELECT id_anillo, nombre, material, unidades FROM anillo";
$result = $conn->query($sql);
?>

<div class="container">
    
    <div class="left"><a href="anillo.html"><img src="for" alt="Formulario" style="width:70px;height:70px;"></a></div>

        </div>

<link rel="stylesheet" href="tabla.css">

<div class="centereg">
<h1>Tabla de anillo</h1>
</div>

<div class="container">
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Material</th>
            <th>Unidades</th>
            <th>Eliminacion</th>
            <th>Modificación</th>
            
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_anillo"] . "</td>" . "<td>" . $row["nombre"] . "</td>" .
                    "<td>" . $row["material"] . "</td>" . "<td>" . $row["unidades"] . "</td>" . "</td>";

                // Agregar el enlace de eliminación con el ID correspondiente
                echo '<td><a href="eliminar_anillo.php?id=' . $row["id_anillo"] . '"><img src="x1.jpg" alt="Eliminar"style="width:25px;height:25px;"></a></td>';

                // Agregar el enlace de modificación con el ID correspondiente
                echo '<td><a href="modificacion_anillo3.php?id=' . $row["id_anillo"] . '"><img src="for2" alt="Modificacion"style="width:25px;height:25px;"></a></td>';

                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>0 results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>