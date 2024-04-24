<?php
$usuario=$_GET["usuario"];
$password=$_POST["password"];

if($usuario=="admin" && $password == "admin"){
    echo "Bienvenido";
}else {
    echo "Usuario y/o contraseña incorrectos";
}


?>