<?php

global $conexion;
include 'conexion_be.php';

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

$query = "INSERT INTO contacto (correo, nombre, asunto, comentario)
    VALUES('$correo', '$nombre', '$asunto', '$comentario' )";

$ejecutar = mysqli_query($conexion, $query);


if(!isset($_POST['correo']) || !isset($_POST['nombre']) || !isset($_POST['asunto']) || !isset($_POST['comentario'])) {
    echo "Todos los campos son requeridos";
}


