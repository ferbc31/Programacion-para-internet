<?php
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];

    $rol_txt =($rol ==1) ? 'Gerente' : 'Ejecutivo';

echo "Bienvenido $correo <br>";
echo "$pass / $rol_txt";

?>
