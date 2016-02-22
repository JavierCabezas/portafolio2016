<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>FerMotouSan - Portafolio Diseño Gráfico</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

    <!--<![endif]-->

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <link rel="stylesheet" href="css/layouts/basic_ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/marketing.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/layouts/basic.css">

    <!--<![endif]-->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/modal.js"></script>
    <script type="text/javascript" src="js/jquery.simplemodal.js"></script>
    <script type="text/javascript" src="js/llamado_modal.js"></script>

</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#about" class="pure-menu-link">Quien diseña</a></li>
            <li class="pure-menu-item"><a href="#trabajos" class="pure-menu-link">Trabajos</a></li>
            <li class="pure-menu-item"><a href="#contacto" class="pure-menu-link">Contacto</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <img src="img/logo.png" />
        <!--<p class="splash-subhead"></p>
        <p><a href="http://purecss.io" class="pure-button pure-button-primary">Get Started</a></p>-->
    </div>
</div>


<div class="content-wrapper">
    <a name="about"></a>
    <div class="ribbon l-box-lrg pure-g content1">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive profile-pic" src="img/about-me.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">
            <h1 class="content-head content-head-ribbon">Quien diseña</h1>
            <p>Mi nombre es Fernanda, soy oriunda de Osorno y residente en Santiago. Diseñadora gráfica titulada de la Universidad de Chile.
                Mis áreas favoritas son el diseño web, la arquitectura de información y UX/UI.<br>
                En mis tiempos libres me dedico dibujar, leer, jugar videojuegos y ver series animadas.</p>
            <p><a href="http://fermotousan.cl/fernanda-kauak-cv.pdf">Lee mi CV aquí</a></p>
        </div>
    </div>

    <!--<div class="content content2">
        <h2 class="content-head is-center">Mis habilidades</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">

                <h2 class="content-subhead">Diseño centrado en el usuario</h2>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <h2 class="content-subhead">Añadir otra cuestión</h2>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <h2 class="content-subhead">Trabajo en equipo</h2>
                <p>
                    Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.
                </p>
            </div>
        </div>
    </div>-->

    <a name="trabajos"></a>
    <div class="content content2">
        <h1 class="content-head is-center">Trabajos</h1>

        <h2 class="sub-title">Web</h2>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/01_melko.png" />
                </div>
                <h2 class="content-subhead">Melko&Partners</h2>
                <div class="proy_data">
                    <p>Diseño y maquetación de sitio web de microholding.</p>
                    <a id="basic-modal-melko" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/web/_modalMelko.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/04_23ky.png" />
                </div>
                <h2 class="content-subhead">TecAgroMed</h2>
                <div class="proy_data">
                    <p>Diseño y maquetación de sitio web de importadora de productos médicos y agrícolas.</p>
                    <a id="basic-modal-tam" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/web/_modalTecagromed.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/03_repuestos.png" />
                </div>
                <h2 class="content-subhead">LN Repuestos</h2>
                <div class="proy_data">
                    <p>Diseño y maquetación de sitio web de tienda de repuestos para automóviles.</p>
                    <a id="basic-modal-repuestos" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/web/_modalRepuestos.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/04_23ky.png" />
                </div>
                <h2 class="content-subhead">23ky</h2>
                <div class="proy_data">
                    <p>Diseño y maquetación de sitio web de microholding.</p>
                    <a id="basic-modal-23ky" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/web/_modal23ky.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/05_nuevasangre.png" />
                </div>
                <h2 class="content-subhead">La Nueva Sangre de Voces Femeninas</h2>
                <div class="proy_data">
                    <p>Diseño y maquetación de sitio web de importadora de productos médicos y agrícolas.</p>
                    <a id="basic-modal-nuevasangre" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/web/_modalNuevasangre.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/04_23ky.png" />
                </div>
                <h2 class="content-subhead">Tótem Parque Metropolitano</h2>
                <div class="proy_data">
                    <p>Diseño y maquetación de sitio web de tienda de repuestos para automóviles.</p>
                    <a id="basic-modal-pms" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/web/_modalTotem.php') ?>
            </div>
        </div>

        <h2 class="sub-title">Imagen corporativa</h2>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/04_23ky.png" />
                </div>
                <h2 class="content-subhead">LN Repuestos</h2>
                <div class="proy_data">
                    <p>Logotipo de tienda de repuestos para automóviles.</p>
                    <a id="basic-modal" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/corp/_modalRepuestos.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/corp_ava/02_veronika.png" />
                </div>
                <h2 class="content-subhead">Veronika's HomeDeco</h2>
                <div class="proy_data">
                    <p>Logotipo de tienda de productos provenientes de Turquía.</p>
                    <a id="basic-modal" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/corp/_modalVeronika.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/04_23ky.png" />
                </div>
                <h2 class="content-subhead">DevValley</h2>
                <div class="proy_data">
                    <p>Logotipo de tienda de repuestos para automóviles.</p>
                    <a id="basic-modal" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/corp/_modalDevvalley.php') ?>
            </div>
        </div>

        <h2 class="sub-title">Otros</h2>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/otros_ava/01_ferroviario.png" />
                </div>
                <h2 class="content-subhead">Asociación Conservación de Patrimonio Ferroviario</h2>
                <div class="proy_data">
                    <p>Material para Día del Patrimonio Cultural, año 2014.</p>
                    <a id="basic-modal" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/otros/_modalFerroviario.php') ?>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1 pure-u-lg-1-3">
                <div class="proy_ava">
                    <img src="img/web_ava/04_23ky.png" />
                </div>
                <h2 class="content-subhead">Veronika's HomeDeco</h2>
                <div class="proy_data">
                    <p>Logotipo de tienda de productos provenientes de Turquía.</p>
                    <a id="basic-modal" class="proy-mas basic" href="#">Ver más</a>
                </div>
                <?php include('./partials/otros/_modalVeronika.php') ?>
            </div>
        </div>
    </div>


    <a name="contacto"></a>
    <div class="content content3">
        <h1 class="content-head is-center">Conversemos</h1>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5" style="margin-left:28%;margin-right:auto;">
                <form class="pure-form pure-form-stacked">
                    <fieldset>

                        <label for="name">Nombre</label>
                        <input id="name" type="text" placeholder="Nombre">


                        <label for="email">E-mail</label>
                        <input id="email" type="email" placeholder="E-mail">

                        <label for="password">Mensaje</label>
                        <input id="password" type="password" placeholder="Mensaje">

                        <button type="submit" class="pure-button">Enviar</button>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>
