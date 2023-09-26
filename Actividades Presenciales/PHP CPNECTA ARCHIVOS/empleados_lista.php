<?php
echo 'a';


//administradores_lista.php
//empleados_lista

require "funciones/conecta.php";
$con =conecta();

$sql = "SELECT * FROM administraciones WHERE status = 1 AND eliminado = 0";
$res = $con->query($sql);

while($row = $res->fetch_array()){
    $id       =$row["id"];
    $nombre   =$row["nombre"];
    $apellidos=$row["apellidos"];
    echo "$id $nombre $apellidos <br>";
}

?>