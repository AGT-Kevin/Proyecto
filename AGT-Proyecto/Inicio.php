<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo '
<script>
alert("por favor inicia secion");
window.location:"Inicio.php";
</script>
';
header("location:AGT-Principal.php");
session_destroy();
die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú despegable</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!------------------------------------------------------Titutlo-----------------

<div class="title">
    <h1>Bienvenidos A AGT - Electronicells</h1>
</div>

----->
  <!---------------------------------------APARTADO DEL MENU------------------------>
    <nav class="nav">
    

    <ul class="list">



        <div class="content1">

               <div class="logo0">
                <h2>Proyecto Inprovisado</h2>
                <p>Bienvenidos a este proyecto en dessarrolo</p>
                </div>
            
            <li class="list__item">
                <div class="list__button">
                    <img src="iconos/inicio.png" class="list__img">
                    <a href="Inicio.php" class="nav__link">Inicio</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="iconos/MV.png" class="list__img">
                    <a href="#" class="nav__link">Nosotros</a>
                    <img src="iconos/flecha.png " class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="mision.php" class="nav__link nav__link--inside">Mision</a>
                    </li>

                    <li class="list__inside">
                        <a href="Vision.php" class="nav__link nav__link--inside">Vision</a>
                    </li>
                </ul>

            </li>


            <li class="list__item">
                <div class="list__button">
                    <img src="iconos/Galeria.png" class="list__img">
                    <a href="Galeria.php" class="nav__link">Galeria</a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="iconos/servicios.png " class="list__img">
                    <a href="#" class="nav__link">Te ofresemos</a>
                    <img src="iconos/flecha.png " class="list__arrow">
                </div>

                <ul class="list__show">
                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Celulares</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Computadoras</a>
                    </li>

                    <li class="list__inside">
                        <a href="#" class="nav__link nav__link--inside">Otros Dispositivos</a>
                    </li>
                </ul>

            </li>


            <li class="list__item">
                <div class="list__button">
                    <img src="iconos/contacto.png " class="list__img">
                    <a href="#" class="nav__link">Contacto</a>
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="iconos/cerrar.png " class="list__img">
                    <a href="php/cerrar.php" class="nav__link">Cerrar Sesion</a>
                </div>
            </li>

        </ul>
    </nav>
  
    <script src="js/script.js"></script>

    
  

    <div class="container__cards">
        <div class="card">
            <div class="cover__card">
                <img src="AGT-img/keivn.jpg" alt="">
            </div>
            <h2>KEVIN CHICAIZA</h2>
            <p>"La programación es una carrera entre los desarrolladores, intentando construir mayores y mejores programas a prueba de idiotas, y el universo, intentanto producir mayores y mejores idiotas. Por ahora va ganando el Universo"</p>
            <hr>
            <div class="footer__card">
                <i>Union y Construccion de este proyecto</i>
            </div>
        </div>
        <div class="card">
            <div class="cover__card">
                <img src="AGT-img/daniela.png" alt="">
            </div>
            <h2>DANIELA PILLAJO</h2>
            <p>"Los mejores programadores no son sólo marginalmente mejores que los buenos. Se trata de un orden de magnitud mayor, medida por cualquier estándar: creatividad conceptual, velocidad, ingenio o habilidad para solucionar problemas"</p>
            <hr>
            <div class="footer__card">
                <i>Construccion de el sistema de validacion de datos</i>
            </div>
        </div>
        <div class="card">
            <div class="cover__card">
                <img src="AGT-img/cristian.jpg" alt="">
            </div>
            <h2>CRISTIAN GUALAN</h2>
            <p>"Un hacker puede ser capaz de producir, en unos pocos meses, algo que un pequeño grupo de desarrolladores (digamos de 7 u 8 personas) podría tener trabajado duramente juntos más de un año. IBM solía decir que ciertos programadores podían ser 100 veces más productivos que otros trabajadores, o más"
</p>
            <hr>
            <div class="footer__card">
                <i>Construccion de base de datos y validacion con la pagina</i>
            </div>
        </div>
        <div class="card">
            <div class="cover__card">
                <img src="AGT-img/omar.jpeg" alt="">
            </div>
            <h2>OMAR GORDILLO</h2>
            <p>"Un gran operario de tornos vale varias veces más que un operario medio, pero un gran escritor de código vale 10.000 veces el precio de un desarrollador medio"</p>
            <hr>
            <div class="footer__card">
                <i>Construccion de los estilos css de la pagina</i>
            </div>
        </div>
    </div>

</body>
</html>


    




