<?php
session_start();
include'conexion.php';
$correo=$_POST['correo'];
$clave=$_POST['clave'];
$clave=hash('sha512',$clave);

$validat_login=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' 
and clave='$clave'");

if(mysqli_num_rows($validat_login) > 0){
    $_SESSION['usuario']=$correo;
    header("location:../Inicio.php");
    exit;
    }
    else
    {
        echo '
            <script>
            alert("Usuario no registrado");
            window.location="../AGT-Principal.php"
            </script>
            ';
            exit;
            }

?>