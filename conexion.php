<?php
function conectar(){
    $host = "localhost";
    $port = "8889"; // puerto por separado no como en el video
    $user = "root";
    $pass = "root";
    $bd = "proyecto-php";

    // Usa el puerto en mysqli_connect con coma, no con dos puntos
    $conn = mysqli_connect($host, $user, $pass, $bd, $port);
    mysqli_select_db($conn, $bd);

    return $conn;
}
?>
