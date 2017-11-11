<?php
session_start();
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["privilegio"] == 0) {

    } else {
        header("Location: docente.php");
    }
} else {
    header("Location: index.php");
}
?>

<h1>Hola Bienvenido al panel de Administrador</h1>
<a href='cerrarsesion.php'>cerrar session</a>
