<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('views/modules/headers.php'); ?>
</head>

<body class="bg-dark">
  <div class="container">
  
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="usuario">Usuario</label>
            <input class="form-control" id="usuario" type="email" aria-describedby="emailHelp" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input class="form-control" id="contrasena" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Recordarme</label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.php">Login</a>
        </form>
        <div class="text-center">          
          <a class="d-block small mt-3" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
    	

	<?php include('views/modules/scroll_button.php')?>
	<?php include('views/modules/logout_modal.php')?>  
	<?php require('views/modules/scripts.php')?>
  
</body>

</html>