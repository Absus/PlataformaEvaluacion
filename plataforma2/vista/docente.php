<?php
session_start();
if(isset($_SESSION["usuario"])){
		if($_SESSION["privilegio"] == 1){

		}else{
			header("Location: estudiante.php");	
		}

}else{
    header("Location: index.php");
}
?>

<h1>Hola Bienvenido al panel de Docente</h1>
<a href='cerrarsesion.php'>cerrar session</a>