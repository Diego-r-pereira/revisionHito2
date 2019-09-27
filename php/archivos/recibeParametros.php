<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$edad = $_GET['edad'];
$direccion = $_GET['direccion'];
$celular = $_GET['celular'];
echo "Bienvenido  $nombre $apellido <br> Eres el visitante nro: $edad";
if (is_int($edad)) {
    echo "entero" . $edad . "<br>";
}
