<?php 
//Colocar el servidor, usuario y contrasenia
$mysql = mysqli_connect("localhost", "username", "password");

//conexion al servidor
if (mysqli_connect_error()) 
{
    printf("Failed Connection %s\n", mysqli_connect_error());
    exit();
}

//mensaje de la version del servidor 
printf("MYSQL Server Version %s\n", mysqli_get_server_info($mysql));

//salimos de la conexion
mysqli_close($mysql);
?>