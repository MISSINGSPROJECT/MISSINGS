<?php

include("bd/reg/bd_reg.php");

if ($conex) {
    echo "online_bd"; 
}else{
    echo "offline_bd";
}

if (isset($_POST['register'])) {
    
    if (strlen($_POST['nombres']) >= 1 &&
    strlen($_POST['apellidos']) >= 1 &&
    strlen($_POST['t_documento']) >= 1 &&
    strlen($_POST['n_documento']) >= 1 &&
    strlen($_POST['f_nacimiento']) >= 1 &&
    strlen($_POST['correo']) >= 1 &&
    strlen($_POST['contraseña']) >= 1){
        $nombres = trim ($_POST ['nombres']);
        $apellidos = trim ($_POST ['apellidos']);
        $t_documento = trim ($_POST ['t_documento']);
        $n_documento = trim ($_POST ['n_documento']);
        $f_nacimiento = trim ($_POST ['f_nacimiento']);
        $correo = trim ($_POST ['correo']);
        $contraseña = trim ($_POST ['contraseña']);
        
        $consulta = "INSERT INTO usuarios(nombres, apellidos, t_documento, n_documento, f_nacimiento, correo, contraseña) VALUES ('$nombres','$apellidos','$t_documento','$n_documento','$f_nacimiento','$correo','$contraseña')";
        $resultado = mysqli_query($conex,$consulta);
        
        if ($resultado) {
            ?>
<h3>Te Haz Registrado</h3>
<?php
        } else {
            ?>
<h3>Vuelve A Intentarlo</h3>
<?php
        }
    } else {
    ?>
<h3>No Haz Llenado Los Campos</h3>
<?php
    }
}


?>