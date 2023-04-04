<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Modulos/Recursos_Pagina/css/normalize.css" />
    <link rel="stylesheet" href="Modulos/Recursos_Pagina/css/estilos.css" />
    <link rel="stylesheet" href="Modulos/Recursos_Pagina/css/estilos_redes.css"/>
    <link rel="stylesheet" href="Modulos/Recursos_Pagina/css/button.css"/>
    <link rel="stylesheet" href="Modulos/Recursos_Pagina/css/principal.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- <script src="https://kit.fontawesome.com/03a89292db.js" crossorigin="anonymous"></script> -->

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>DidacTICS</title>
</head>

<body>
    <header>
    <div class="header-content">

        <div class="logo">
            <h1>didac<b>TIC'S</b></h1>
        </div>

        <div class="menu" id="show-menu">

            <nav>
                <ul>
                    <li class="menu-selected"><a href="index.php" class="text-menu-selected"> 
                        <i class="fas fa-file-alt"></i>Inicio</a></li>
                    <li><a href="#preescolar"> <i class="fab fa-youtube"> </i>Dinamicas Preescolar</a></li>
                    <li><a href="#primaria"> <i class="fas fa-home"></i> Dinamicas Primaria</a></li>
                    <li><a href="#nosotros"> <i class="fas fa-headset"></i> Contacto</a></li>
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
    <li><a href="#preescolar"><i class="fas fa-search"></i>Dinamicas Preescolar</a></li>
    <li><a href="#primaria"><i class="fas fa-search"></i></a>Dinamicas Primaria</li>
    <li><a href="#nosotros"><i class="fas fa-search"></i></a>Contacto</li>
</ul>

<div id="cover-ctn-search"></div>
    

    <nav class="hero">
        
        <div class="container">


            <!-- <nav class="nav">
                <a href="#preescolar" class="nav__items nav__items--cta">Dinamicas Preescolar</a>
                <a href="#primaria" class="nav__items">Dinamicas Primaria</a>
                <a href="#nosotros" class="nav__items">Nosotros</a>
                <a href="#aviso" class="nav__items">Aviso de Privacidad</a>
            </nav> -->

            <section class="hero__container">
                <div class="hero__texts">
                    <h1 class="hero_title">DidacTICS [Desarrollo Web]</h1>
                    <h2 class="hero__subtitle">El método de aprendizaje didactivo y divertido</h2>
                    <a href="Modulos/login.php" class="hero__cta">Únete a la
                        Comunidad</a>
                    <h4 class="hero__sub">¡Comparte con nosotros tu gusto por el conocimiento!</h4>
                </div>
            </section>
        </div>
        <div class="hero__wave" style="overflow: hidden">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff"></path>
            </svg>
        </div>
    </nav>
    
    
    <main>
        <section class="preescolar">
            <a name="preescolar" />
            
            <h2 class="subtitle">Dinamicas para Preescolar</h2>
            <!--
                <img src="Modulos/Recursos_Pagina/assets/aspectos.jpeg" class="aspectos__picture" alt="">
            <p class="aspectos__copy" >Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Minus sit, sapiente nulla optio beatae veritatis tenetur aliquam ea fugiat 
                commodi a doloribus, corrupti, assumenda esse ipsam natus neque officia ratione?</p>
            <a href="#" class="aspectos__cta">Aspectos éticos</a>
            -->
        </section>

        <section class="galery_aspectos">
            <div class="container">

                <div class="aspectos__grid">
                    <article class="aspectos__item">
                        <img src="Modulos/Recursos_Pagina/assets/sopa-letra.jpg" class="aspectos_img" alt="">
                        <a href="Modulos/letras.php" target="_blank">
                            <div class="aspectos__hover">
                                <h2 class="aspectos__title">Sopa de Letras</h2>
                                <i class="far fa-title-alt aspectos__icon"></i>
                            </div>
                        </a>
                    </article>

                    <article class="aspectos__item">
                        <img src="Modulos/Recursos_Pagina/assets/calcomania.jpg" class="aspectos_img" alt="">
                        <a href="Modulos/valores.php"
                            target="_blank">
                            <div class="aspectos__hover">
                                <h2 class="aspectos__title">Calcomanias de valores</h2>
                                <i class="far fa-title-alt aspectos__icon"></i>
                            </div>
                        </a>
                    </article>

                    <article class="aspectos__item">
                        <img src="Modulos/Recursos_Pagina/assets/numeros.jpg" class="aspectos_img" alt="">
                        <a href="Modulos/numeros.php"
                            target="_blank">
                            <div class="aspectos__hover">
                                <h2 class="aspectos__title">Calcomanias con números</h2>
                                <i class="far fa-title-alt aspectos__icon"></i>
                            </div>
                        </a>
                    </article>

                    <article class="aspectos__item">
                        <img src="Modulos/Recursos_Pagina/assets/visor.jpg" class="aspectos_img" alt="">
                        <a href="Modulos/adivina.php" target="_blank">
                            <div class="aspectos__hover">
                                <h2 class="aspectos__title">Adivina que soy</h2>
                                <i class="far fa-title-alt aspectos__icon"></i>

                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <section class="primaria"> 
            <a name="primaria" />
        <h2 class="subtitle">Dinamicas para Primaria</h2>
                  
            <div class="container">
                <a name="galeria" />
                <div class="estandares__grid">
                    <article class="estandares__item">
                        <img src="Modulos/Recursos_Pagina/assets/puntaje.jpg" class="estandares_img" alt="">
                        <a href="Modulos/puntos.php"
                            target="_blank">
                            <div class="estandares__hover">
                                <h2 class="estandares__title">Uniendo puntos</h2>
                                <i class="far fa-title-alt estandares__icon"></i>
                            </div>
                        </a>
                    </article>

                    <article class="estandares__item">
                        <img src="Modulos/Recursos_Pagina/assets/avatar.jpg" class="estandares_img" alt="">
                        <a href="Modulos/avatar.php" target="_blank">
                            <div class="estandares__hover">
                                <h2 class="estandares__title">Diseña tu Avatar</h2>
                                <i class="far fa-title-alt estandares__icon"></i>
                            </div>
                        </a>
                    </article>

                    <article class="estandares__item">
                        <img src="Modulos/Recursos_Pagina/assets/mundo.jpg" class="estandares_img" alt="">
                        <a href="Modulos/mundo.php" target="_blank">
                            <div class="estandares__hover">
                                <h2 class="estandares__title">Conoce el mundo</h2>
                                <i class="far fa-title-alt estandares__icon"></i>
                            </div>
                        </a>
                    </article>

                    <article class="estandares__item">
                        <img src="Modulos/Recursos_Pagina/assets/pegatinas.jpg" class="estandares_img" alt="">
                        <a href="Modulos/memorama.php" target="_blank">
                            <div class="estandares__hover">
                                <h2 class="estandares__title">Memorama</h2>
                                <i class="far fa-title-alt estandares__icon"></i>
                            </div>
                        </a>
                    </article>

                    
                </div>
            </div>
        </section>

        <section class="testimony container">
            <a name="nosotros" />
            <h2 class="subtitle">Nosotros</h2>
            <div class="testimony__grid">
                <article class="testimony__item">
                    <div class="testimony__person">
                        <img src="Modulos/Recursos_Pagina/assets/mujer.png" alt="" class="testimony__img">
                        <div class="testimony__texts">
                            <h3 class="testimony__name">Ana Isabel Jasso Velázquez</h3>
                            <p class="testimony__number">No. Control: 1220100074</p>

                        </div>
                    </div>
                    <p class="testimony__par">Estudiante de Ingeniería en Desarrollo y Gestión de Software</p>
                </article>

                <article class="testimony__item">
                    <div class="testimony__person">
                        <img src="Modulos/Recursos_Pagina/assets/man.jpg" alt="" class="testimony__img">
                        <div class="testimony__texts">
                            <h3 class="testimony__name">Carlos Eduardo Rangel Lozano</h3>
                            <p class="testimony__number">No. Control: 1219100777</p>

                        </div>
                    </div>
                    <p class="testimony__par">Estudiante de Ingeniería en Desarrollo y Gestión de Software</p>
                </article>
            </div>
        </section>

        
    </main>

    

    <footer class="footer">
        <a name="aviso" />
        <div class="container footer__grid">
            <nav class="nav">
                <a class="nav__items nav__items--footer" href="#preescolar">Didacticas Preescolar</a>
                <a class="nav__items nav__items--footer" href="#primaria">Didacticas Primaria</a>
                <a class="nav__items nav__items--footer" href="#nosotros">Nosotros</a>
                <a class="nav__items nav__items--footer"
                    href="Modulos/Modulos_Normateca/Aviso_privacidad.pdf" target="_blank">Aviso de
                    Privacidad</a>

            </nav>

            <section class="footer_contact">
                <h3 class="footer__title">Seguridad del Sitio</h3>
                <div class="footer__icons">
                    <span class="footer__container-icons">
                        <a href="Modulos/Modulos_Normateca/Aviso_privacidad.pdf" target="_blank">Aviso de
                            Privacidad</a>
                    </span>

                    <span class="footer__container-icons">
                        <a href="Modulos/Modulos_Normateca/Terminos_Condiciones.pdf"
                            target="_blank">Terminos y Condiciones</a>
                    </span>

                    <span class="footer__container-icons">
                        <a href= "Modulos/mapa.php" 
                            target="_blank">Mapa del Sitio</a>
                    </span>
                </div>
            </section>

            <section class="buttons">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google-plus"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-instagram"></a>
            </section>
        </div>
    </footer>
    <div id="subir__arriba">
        <i class="fas fa-angle-up"></i>
    </div>

    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>

</html>