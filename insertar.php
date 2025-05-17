<?php
    include("conexion.php");
    $conn = conectar();
    $ine = $_POST['ine'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $sql = "INSERT INTO alumnos VALUES (null, '$ine', '$nombre', '$apellidos')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header("Location: index.php");
    } else {
        echo "Error al insertar los datos";
    }
?>