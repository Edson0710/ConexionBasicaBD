<?php
    include 'conexion.php';

    if(count($_POST)){
        $nombre = $_POST['nombre'];
        $equipo = $_POST['equipo'];
        $seleccion = $_POST['seleccion'];

        $sql = "INSERT INTO jugadores (nombre, equipo, seleccion) VALUES ('$nombre', '$equipo', '$seleccion')";
        $conn->exec($sql);

        header('Location: index.php');
    }
?>