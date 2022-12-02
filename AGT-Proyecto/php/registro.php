<?php

include'conexion.php' ;

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$clave = hash('sha512', $clave);
 

$query = "INSERT INTO usuarios(nombre, correo, usuario, clave)
values('$nombre','$correo','$usuario','$clave')";


$verificar_correo=mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' ");


if(mysqli_num_rows($verificar_correo)>0){
echo '
<script>
alert("Este correo ya fue registrado Anteriormente");
window.location="../AGT-Principal.php"
</script>
';
exit();
}



$verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' ");


if(mysqli_num_rows($verificar_usuario)>0){
echo '
<script>
alert("Este Usuario ya fue registrado Anteriormente");
window.location="../AGT-Principal.php"
</script>
';
exit();
}



$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
echo '
<script>
alert("Usuario almacenado exitosamente");
window.location="../AGT-Principal.php"
</script>
';
}
else{
echo '
    <script>
    alert("Usuario no almacenado");
    window.location="../AGT-Principal.php"
    </script>
    ';
    }
mysqli_close($conexion);
?>