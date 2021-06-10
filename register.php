<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MISSINGS</title>
    <link rel="stylesheet" href="css/register.css" />
</head>

<body>
    <div class="background-wrap">
        <div class="background"></div>
    </div>

    <form id="accesspanel" method="post">
        <h1 id="litheader">MISSINGS</h1>
        <div class="inset">
            <p>
                <input type="text" name="nombres" id="nombres" placeholder="Nombres">
            </p>
            <p>
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
            </p>
            <p>
                <select name="t_documento" id="t_documento">
                    <option>Tipo De Documento</option>
                    <option>Tarjeta De Identidad</option>
                    <option>Cedula De Ciudadania</option>
                    <option>Cedula De Extranjeria</option>
                    <option>Pasaporte</option>
                </select>
            </p>
            <p>
                <input type="number" name="n_documento" id="n_documento" placeholder="Numero De Documento">
            </p>
            <p>
                Fecha De Nacimiento<input type="date" name="f_nacimiento" id="f_nacimiento">
            </p>
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
            <input class="loginLoginValue" type="hidden" name="service" value="login" />
        </div>
        <p class="p-container">
            <a href="login.php"><input type="button" name="login" id="login" value="¿Ya Tienes Cuenta?"></a>
            <br><br>
            <input type="submit" name="register" id="register" value="Registrar">
        </p>
    </form>
    <?php
include("bd/reg/registrar.php");
?>
</body>

</html>