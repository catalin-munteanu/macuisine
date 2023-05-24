<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sitio web de MaCuisine Amoblamientos, Mar del Plata, Argentina">
    <link rel="stylesheet" href="css\style.css">
    <script src="js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Ma Cuisine</title>
</head>

<body>

    <header>

        <img src="img\mobile\logo.png" alt="Logo MaCuisine" id="imagenLogo">

        <article id="clickeablesHeader">

            <ul id="menuRedesHeader">
                <li class="itemsRedesHeader"><a href="https://www.youtube.com/channel/UC_GPMFamuDmNqYKILMc1fbw" target="_blank" class="linksRedesHeader"><img src="img\mobile\icono-youtube.svg" alt="Botón de Youtube"></a></li>
                <li class="itemsRedesHeader"><a href="https://www.instagram.com/macuisine_muebles/" target="_blank" class="linksRedesHeader"><img src="img\mobile\icono-instagram.svg" alt="Botón de Instagram"></a>
                </li>
                <li class="itemsRedesHeader"><a href="https://www.facebook.com/MaCuisineamoblamientos/" target="_blank" class="linksRedesHeader"><img src="img\mobile\icono-facebook.svg" alt="Botón de Facebook"></a>
                </li>
            </ul>

            <button id="burger-menu-toggler" aria-label="Menú de navegación">
                <img src="img\mobile\burger-menu.svg" id="open-mobile-menu" alt="Botón de apertura del menú"></img>
                <img src="img\mobile\burger-close.png" id="close-mobile-menu" alt="Botón de cierre del menú"></img>
            </button>

            <ul id="mainMenu">
                <li class="itemsNav"><a href="#seccionMobiliarios" class="textoGrisIntermedio weight700 size16">Cocinas</a></li>
                <li class="itemsNav"><a href="#mobiliariosVestidoresComentarios" class="textoGrisIntermedio weight700 size16">Vestidores</a></li>
                <li class="itemsNav"><a href="#sub-section-renders" class="textoGrisIntermedio weight700 size16">Renders</a></li>
                <li class="itemsNav"><a href="#seccionContacto" class="textoGrisIntermedio weight700 size16">Contacto</a></li>
            </ul>

        </article>

    </header>

    <main>

        <section id="seccionMobiliarios" class="fondoBlanco">
            <picture>
                <source media="(min-width:768px)" srcset="img\desktop\img-01-d.webp">
                <img id="fotoMobiliariosDesktop" src="img\mobile\imagen-01.webp" alt="Foto ilustrativa de mobiliario para cocina" style="width:auto;" loading="lazy">
            </picture>
            <!--<img src="img\mobile\imagen-01.webp" alt="Foto ilustrativa de mobiliario para cocina" class="fotos"
                id="fotoMobiliariosMobile">
            <img src="img\desktop\img-01-d.webp" alt="Foto ilustrativa de mobiliario para cocina" class="fotos"
                id="fotoMobiliariosDesktop">-->
            <article class="fondoNegro" id="textoMobiliarios">
                <h3 class="weight500">MOBILIARIOS<br><strong class="weight700 textoNaranja">COCINA</strong></h3>
                <h5 class="size8 weight400" id="renderizamos">RENDERIZAMOS TU PROYECTO</h5>
                <p class="size10">Desde <strong>1989</strong> Ma Cuisine ofrece una atención de excelencia a sus
                    clientes</p>
            </article>
        </section>

        <section id="seccionPosts" class="fondoBlanco">

            <h2 class="textoGrisOscuro weight400" id="newPosts">NUEVOS <strong class="textoGrisOscuro">POSTEOS</strong>
            </h2>

            <article id="containerPosteos">

                <figure>
                    <a href="https://www.instagram.com/macuisine_muebles/" target="_blank">
                        <img src="img/mobile/img-post-ig-01.webp" alt="Foto ilustrativa de mobiliario apto para tele" loading="lazy">
                        <figcaption>
                            <h4 class="textoGrisOscuro weight400">DORMITORIO</h4>
                            <p class="textoGrisClaro">Mobiliario de dormitorio<br>apto para tele</p>
                        </figcaption>
                    </a>
                </figure>

                <figure>
                    <a href="https://www.instagram.com/macuisine_muebles/" target="_blank">
                        <img src="img/mobile/img-post-ig-02.webp" alt="Foto ilustrativa de detalles en el mobiliario" loading="lazy">
                        <figcaption>
                            <h4 class="textoGrisOscuro weight400">COMBINACIÓN</h4>
                            <p class="textoGrisClaro">Nos gusta estar en<br>cada detalle</p>
                        </figcaption>
                    </a>
                </figure>

                <figure>
                    <a href="mailto:info@ma-cuisine.com.ar"><img src="img/mobile/img-post-ig-03.webp" alt="Foto ilustraiva de sillas para el hogar" loading="lazy"></a>
                    <figcaption>
                        <h4 class="textoGrisOscuro weight400"><a class="textoGrisOscuro weight400" href="mailto:info@ma-cuisine.com.ar">TE GUSTA?</a></h4>
                        <p class="textoGrisClaro"><a class="textoGrisClaro" href="mailto:info@ma-cuisine.com.ar">Hacé de
                                tu hogar<br>un espacio único</a></p>
                    </figcaption>
                </figure>

            </article>

        </section>

        <section id="mobiliariosVestidoresComentarios">

            <figure id="mobiliariosVestidores">

                <picture>
                    <source media="(min-width:768px)" srcset="img\desktop\img-02-d.webp">
                    <img id="fotoVestidoresDesktop" src="img\mobile\imagen-02.webp" alt="Foto detalle de vestidores" style="width:auto;" loading="lazy">
                </picture>

                <!--<img src="img\mobile\imagen-02.webp" alt="Foto detalle de vestidores" class="fotos"
                    id="fotoVestidoresMobile">
                <img src="img\desktop\img-02-d.webp" alt="Foto detalle de vestidores" class="fotos"
                    id="fotoVestidoresDesktop">-->

                <figcaption class="fondoGris" id="textoVestidores">
                    <h3 class="size26 weight500">MOBILIARIOS<br><strong class="textoNaranja size28 weight800">vestidores</strong></h3>
                    <h5 class="size16 weight400" id="aMedida">DISEÑOS A MEDIDA</h5>
                    <p class="size9">Contamos con amplia gama de accesorios nacionales e importados, pantaloneros,
                        botineros, corbateros, canastos, etc., que ayudarán a mantener el orden y confort de cada
                        integrante
                        de su familia.</p>
                </figcaption>

            </figure>

            <div class="slider-renders" id="sub-section-renders">
                <article class="slideshow-container">

                    <!-- Imágenes -->
                    <div class="mySlides fade" style="display:block;">
                        <div class="numbertext"></div>
                        <img src="img\desktop\COCINA-04.webp" alt="Imagen renderizada de mobiliario para cocina" style="width:100%" loading="lazy">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="img\desktop\COCINA-03.webp" alt="Imagen renderizada de mobiliario para cocina" style="width:100%" loading="lazy">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="img\desktop\COCINA-02.webp" alt="Imagen renderizada de mobiliario para cocina" style="width:100%" loading="lazy">
                        <div class="text"></div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="img\desktop\COCINA-01.webp" alt="Imagen renderizada de mobiliario para cocina" style="width:100%" loading="lazy">
                        <div class="text"></div>
                    </div>

                    <!-- Botones anterior - siguiente -->
                    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
                    <button class="next" onclick="plusSlides(1)">&#10095;</button>
                </article>

                <!-- Puntos indicadores -->
                <div style="text-align:center; display:none;">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>

                <article class="fondoNegro" id="textoRenders">
                    <h3 class="weight700 size24">RENDERIZAMOS<br><strong class="textoNaranja weight700 size24">TU
                            PROYECTO!</strong></h3>
                    <p class="size10">Nos especializamos en digitalizar el espacio que idealizás para que puedas
                        visualizar tu hogar
                        antes de que esté terminado.</p>
                </article>
            </div>
        </section>

        <section id="seccionVideoHerrajes" class="fondoBlanco">
            <h5 class="textoGrisMasClaro weight400 size16">herrajes premium</h5>
            <h3 class="textoGrisOscuro weight400 size24">MOBILIARIO DE COCINA</h3>
            <div class="video-container">
                <iframe id="videoHerrajes" width="560" height="315" src="https://www.youtube.com/embed/sdP2WcHDDfI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <p class="textoGrisOscuro size12">Utilizando el tablero Premium Glossmax blanco brillante y los
                herrajes de Hafele, logrando darles dinamismo a los espacios.</p>
        </section>

        <section id="seccionContacto" class="fondoNegro contact-section">

            <figure id="holaEscribinos">

                <picture>
                    <source media="(min-width:768px)" srcset="img\desktop\img-04-d.webp">
                    <img id="fotoContactoDesktop" src="img\mobile\imagen-04.webp" alt="Foto detalle de vestidores" style="width:auto;">
                </picture>

                <!--<img src="img\mobile\imagen-04.webp" alt="CONTACTO" class="fotos" id="fotoContactoMobile">
                <img src="img\desktop\img-04-d.webp" alt="CONTACTO" class="fotos" id="fotoContactoDesktop">-->

                <figcaption class="fondoGris" id="textoEscribinos">
                    <h2 class="weight400 size24" id="hola">HOLA<br><strong class="weight700">ESCRIBINOS</strong></h2>
                    <p class="size13" id="somosMaCuisine">SOMOS MACUISINE AMOBLAMIENTOS</p>
                </figcaption>

            </figure>

            <?php
            if (isset($success)) {
                if ($success) {
                    echo '<br><h2 style="text-align: center;margin: 50px auto 30px;">Gracias, hemos recibido tu consulta, en breve te estaremos contactando</h2>';
                } else {
                    echo '<br><h2 style="text-align: center;margin: 50px auto 30px;">Parece que ha habido un error. Vuelve a intentarlo más tarde</h2>';
                }
            } else {
            ?>

                <form action="#seccionContacto" method="post" class="fondoNegro" id="form">
                    <article id="containerNombreEmail">
                        <input type="text" name="nombre" id="formNombre" placeholder="Nombre" aria-label="Nombre" required>
                        <br>
                        <input type="email" name="email" id="formEmail" placeholder="email@gmail.com" aria-label="Email" required>
                        <br>
                    </article>
                    <textarea name="mensaje" id="formMensaje" maxlength="3000" aria-label="Mensaje" required></textarea>
                    <article id="containerAclaracionesBoton">
                        <input type="submit" value="ENVIAR" aria-label="Enviar" id="botonContacto">
                        <p class="size12" id="aclaracionesForm">Dejanos tu consulta y nos comunicaremos con vos.<br>
                            Si podés dejanos un número de contacto.<br>
                            Gracias, MaCuisine.</p>
                    </article>
                </form>
            <?php
            }
            ?>

        </section>

    </main>

    <footer class="fondoBlanco">

        <article id="textoFooter">

            <ul id="listaDatosContacto">

                <li class="textoGrisIntermedio size16 elementosDatosContacto">(0223) 495-6211</li>
                <li class="textoGrisIntermedio size16 elementosDatosContacto" id="elementoDireccion">Av. Independencia
                    2099</li>
                <li class="textoGrisIntermedio size16 elementosDatosContacto" id="elementoCiudad">Mar del Plata, Buenos
                    Aires</li>
                <li class="textoGrisIntermedio size16 elementosDatosContacto">info@ma-cuisine.com.ar</li>

            </ul>

            <h4 class="textoGrisClaro weight400 size20" id="seguinos">SEGUINOS</h4>

        </article>

        <ul id="listaIconosFooter">
            <li class="elementosListaFooter">
                <a class="iconosFooter" href="https://www.facebook.com/MaCuisineamoblamientos/" target="_blank"><img src="img\mobile\icono-footer-facebook.svg" id="iconoFacebookFooter" alt="Botón de Facebook"></a>
            </li>
            <li class="elementosListaFooter">
                <a class="iconosFooter" href="https://www.instagram.com/macuisine_muebles/" target="_blank"><img src="img\mobile\icono-footer-instagram.svg" id="iconoInstagramFooter" alt="Botón de Instagram"></a>
            </li>
            <li class="elementosListaFooter">
                <a class="iconosFooter" href="https://www.youtube.com/channel/UC_GPMFamuDmNqYKILMc1fbw" target="_blank"><img src="img\mobile\icono-footer-youtube.svg" id="iconoYoutubeFooter" alt="Botón de Youtube"></a>
            </li>
        </ul>

    </footer>

</body>

</html>