<?php
require ('scroll_up/scroll.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../Modulos/Recursos_Pagina/css/normalize.css" />
    <link rel="stylesheet" href="../Modulos/Recursos_Pagina/css/estilos.css" />
    <link rel="stylesheet" href="../Modulos/Recursos_Pagina/css/estilos_redes.css"/>
    <link rel="stylesheet" href="../Modulos/Recursos_Pagina/css/button.css"/>
    <link rel="stylesheet" href="../Modulos/Recursos_Pagina/css/principal.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    
</head>

<body>
    <header>
    <div class="header-content">

        <div class="logo">
            <strong><h1>didac</strong><b>TIC'S</b></h1>
        </div>

        <div class="menu" id="show-menu">

            <nav>
                <ul>
                        <li><a href="../index.php"> <i class="fab fa-youtube"> </i>Inicio</a></li>    
                        <li><a href="../index.php #primaria"> <i class="fas fa-home"></i> Dinamicas Preescolar
                        <li class="menu-selected"><a href="../index.php #primaria" class="text-menu-selected"> 
                        <i class="fas fa-file-alt"></i>Dinamicas Primaria</a></li>
                    </a></li>
                    <li><a href="../index.php #nosotros"> <i class="fas fa-headset"></i> Contacto</a></li>
                </ul>
            </nav>

        </div>

        <div id="ctn-icon-search">
            <i class="fas fa-search" id="icon-search"></i>
        </div>

    </div>

    <div id="icon-menu">
        <i class="fas fa-bars"></i>
    </div>
</header>

<div id="ctn-bars-search">
    <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
</div>

<ul id="box-search">
    <li><a href="#"><i class="fas fa-search"></i></a></li>
    <li><a href="#"><i class="fas fa-search"></i></a></li>
    <li><a href="#"><i class="fas fa-search"></i></a></li>
</ul>




<div id="cover-ctn-search"></div>
    

    <script src="../js/main.js"></script>
    <script src="../js/script.js"></script>


</html>