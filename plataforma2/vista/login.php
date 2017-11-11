<?php include 'include/head.php';?>

<?php include 'include/menu.php';?>

<div class="container">
    <div class="row col-md-4 col-md-offset-4">
        <br>
        <div class="">
		<center>
            <div class="panel-heading text-center">
                <h3 class="">Ingrese los datos</h3>
            </div>
            <div class="panel-body">
                <form class="form-signin form-login" role="form" method="post" action="validar.php">
                    <div class="form-group">
                        <label for="usuario" class="control-label">Usuario:</label>
                        <input type="email" id="usuario" name="usuario" class="" placeholder="usuario" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="control-label">Contraseña:</label>
                        <input type="password" id="pass" name="pass" class="" placeholder="contraseña" required>
                    </div>
                    <div class="form-group">
                        <button id="enviar" type="submit" class="">ingresar</button>
                    </div>
                </form>
            </div>
		</center>"
        </div>
    </div>
</div>
<div class="container" id="resultado">

</div>

<?php include 'include/footer.php';?>