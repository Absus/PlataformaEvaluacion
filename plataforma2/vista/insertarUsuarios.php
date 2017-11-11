
<?php include 'include/head.php';?>

<?php include 'include/menu.php';?>

<div class="container">
  <div class="row">
      <div class="row col-md-4 col-md-offset-4">
          <br>
          <div class="">
		  <center>
              <div class="panel-heading">
                    <h3 class="">Insertar Usuarios</h3>
              </div>
              <div class="panel-body">
                    <div class="form-group">
                          <label for="usuario" class="">Usuario:</label>
                          <input type="text" class="" id="usuario">
                    </div>
                    <div class="form-group">
                          <label for="pass" class="">Password:</label>
                          <input type="password" class="" id="pass">
                    </div>
                    <div class="form-group">
                          <input class="" type="button" value="registrar" id="btnregistrar">
                    </div>
              </div>
		  </center>
          </div>
      </div>
    </div>
</div>
<div class="container">
      <div class="row">
            <div class="col-md-4 col-md-offset-4">
                  <div id="resultado">
                        <!-- resultado ajax aquí -->
                  </div>
            </div>
      </div>
</div>


<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/code.js"></script>

<?php include 'include/footer.php';?>