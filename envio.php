<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "academia";

$conexion = mysqli_connect($host, $user,$password);
if (!$conexion) {
    die("Problemas al conectar");
}

mysqli_select_db($conexion,$db);

$nombres =$_POST['nombres'];
$direc =$_POST['direc'];
$correo =$_POST['correo'];
$comentarios =$_POST['comentarios'];

$sql = "INSERT INTO datos (nombres, direc, correo, comentarios) VALUES ('$nombres', '$direc', '$correo', '$comentarios')";
$ejecutar = mysqli_query($conexion,$sql);

if (!$ejecutar) {
    echo "<script>alert('Problemas al enviar'); window.location='contactos.html';</script>";
} else {
    echo "<script>alert('Datos enviados correctamente'); window.location='index.html';</script>";
}
?>