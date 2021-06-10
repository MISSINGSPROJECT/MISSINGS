<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MISSINGS</title>
    
    <link rel="stylesheet" href="css\login.css"/>
  </head>
  <body>
    <div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel" action="validar.php" method="post">
  <h1 id="litheader">MISSINGS</h1>
  <div class="inset">
    <p>
      <input type="email" name="correo" id="correo" placeholder="Correo">
    </p>
    <p>
      <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
    </p>
    <div style="text-align: center;">
      <div class="checkboxouter">
        <input type="checkbox" name="checkbox" id="checkbox" value="Remember">
        <label class="checkbox"></label>
      </div>
      <label for="checkbox">Acepto Terminos y Condiciones</label>
    </div>
    <input class="loginLoginValue" type="hidden" name="service" value="login"/>
  </div>
<p class="p-container">
    <a href="register.php"><input type="button" name="register" id="register" value="¿No Tienes Cuenta?"></a>
    <br><br>
    <input type="submit" name="Login" id="go" value="Iniciar Sesión">
  </p>
</form>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
  </body>
</html>