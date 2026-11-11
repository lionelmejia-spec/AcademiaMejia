<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "academia";

$conexion = mysqli_connect($host, $user, $password);
if (!$conexion) {
    die("Problemas al conectar");
}

mysqli_select_db($conexion, $db);

$usuario = $_POST['usuario'];
$password_ingresado = $_POST['password'];

$sql = "SELECT * FROM academia WHERE usuario = '$usuario' AND password = '$password_ingresado'";
$query = mysqli_query($conexion, $sql);
$nr = mysqli_num_rows($query);

if ($nr == 1) {
    header("Location: pagina.html");
} else {
    echo "<script>alert('Usuario incorrecto'); window.location='login.html';</script>";
}
?>