<?php
// Include the script that defines $id_to_modify and other variables
include 'modificacion_anillo.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="modificaciones.css">
    <title>Modificar Anillos</title>
</head>
<body>
    <h1>Modificar Anillos</h1>
    
    <div class="container">
        <form action="modificacion_anillo.php" method="post">
            <h1>Modificar Anillos</h1>
            <input type="hidden" id="id" name="id" value="<?php echo $id_to_modify; ?>">
            <label for="nuevo_nombre">Nombre:</label>
            <input type="text" id="nuevo_nombre" name="nuevo_nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>" required>
            <label for="nuevo_material">Material:</label>
            <input type="text" id="nuevo_material" name="nuevo_material" value="<?php echo isset($material) ? $material : ''; ?>" required>
            
            <label for="nuevo_unidades">  Unidades:</label>
            <input type="text" id="nuevo_unidades" name="nuevo_unidades" value="<?php echo isset($unidades) ? $unidades : ''; ?>" required>
            <input type="submit" value="Modificar">
        </form>
    </div>
</body>
</html>