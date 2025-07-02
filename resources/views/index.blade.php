<!DOCTYPE html>
<html lang="es">
<head>
    <!--HEAD START-->
    <title>Portafolios | Darwin J. Sansonetti D.</title>
    <!--::::: support meta :::::::-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--:::::icon Calling:::::::-->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">

       <!--::::: ALL CSS CALLING :::::::-->
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/modal-video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/stellarnav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/inner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <style>
        .justificado {
            text-align: justify;
        }
    </style>
</head>
<!--HEADE END-->

<body>
    <!--BODY START-->

    <!--PLACEHOLDER AREA START-->
    <div class="preloader">
        <div class="lds-dual-ring"></div>
    </div>
    <!--PLACEHOLDER AREA END-->

    <div class="site site-white"> <!--::::: SITE AREA START :::::::-->
        <!--::::: HEADER AREA START :::::::-->
        <div class="header-area" id="header">
            <!--scroll to up btn-->
            <a href="#home" class="up-btn"><i class="fal fa-angle-up"></i></a>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 align-self-center">
                        <a href="javascript:void(0)" class="logo"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <div class="col-6 text-center align-self-center">
                        <div class="main-menu">
                            <div class="stellarnav">
                                <ul class="navbarmneuclass">
                                    <li><a href="#home">Inicio</a></li>
                                    <li><a href="#perfil">Perfil</a></li>
                                    <li><a href="#experiencia">Experiencia</a></li>
                                    <li><a href="#proyectos">Proyectos</a></li>
                                    <li><a href="#desktop">Desktop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-lg-3 align-self-center text-right">
                        <div class="search-area">
                            <div class="grid-menu" id="grid-side">
                                <img src="{{ asset('img/icon/hamburger.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-widgest-wrap" id="slide-widgest">
                <div class="side-widgest" id="side-content">
                    <div class="side-close" id="close-btn">
                    <i class="fal fa-times"></i>
                </div>
                    <div class="logo">
                        <a href="#"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                    </div>
                    <div class="side-content">
                        <p style="text-align: justify;">Soy un desarrollador apasionado por lo que realiza y lo manifiesto en el código que desarrollo.
                            Con más de 10 años de experiencia en el desarrollo de sistemas informáticos, tanto en Venezuela
                            como en otros países del mundo. He mejorado y desarrollado productos que van desde sistemas de 
                            escritorio, hasta aplicaciones móviles. Mi frase favorita "Nunca es tarde para seguir aprendiendo".</p>
                    </div>
                    <div class="side-social">
                        <ul>
                            <li><a href="https://www.facebook.com/darwinjose.sansonettidiaz/?locale=es_LA" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/djsd1987"><i class="fab fa-twitter" target="_blank"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/darwin-jose-sansonetti-diaz-577819297" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.instagram.com/djsdisla" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--::::: HEADER AREA END :::::::-->

        <!--:::::WELCOME ATRA START :::::::-->
        <div class="welcome-area-wrap welcome__wrap2">
            <!--::::: WELCOME CAROUSEL START :::::::-->
            <div class="welcome-area" id="home">
                <div class="single-welcome-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="wlc-title white">
                                    <h1 class="fadeInDown animated"><span>La imaginación</span> es más importante que el conocimiento.</h1>
                                    <p class="fadeInDown animated">Deja un legado positivo, tu huella en el mundo. El éxito no es un destino, es un viaje, disfrútalo.</p>
                                    
                                    <a href="{{ asset('storage/cv/curriculum.pdf') }}" class="cbtn cbnt1 fadeInDown animated" download>
                                        Descargar CV <i class="fal fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wlc-author-1">
                        <img src="{{ asset('img/author/author3.png') }}" alt="">
                        <h1 class="wlc-filltext">gilroy</h1>
                    </div>
                </div>

            </div>
            <!--::::: WELCOME CAROUSEL END:::::::-->
            <div class="memphis-wrap">
                <div class="memphics">
                    <img src="{{ asset('img/icon/cta1.png') }}" alt="" class="memphis memphis1">
                    <img src="{{ asset('img/bg/circle_shape.svg') }}" alt="" class="memphis memphis2">
                    <img src="{{ asset('img/icon/cta2.png') }}" alt="" class="memphis memphis3">
                    <img src="{{ asset('img/icon/cta3.png') }}" alt="" class="memphis memphis4">
                    <img src="{{ asset('img/icon/cta6.svg') }}" alt="" class="memphis memphis5">
                    <img src="{{ asset('img/icon/cta5.png') }}" alt="" class="memphis memphis6">
                    <img src="{{ asset('img/icon/cta7.svg') }}" alt="" class="memphis memphis7">
                </div>
            </div>
        </div>
        <!--:::::WELCOME AREA END :::::::-->

        <!--:::::SKILL AREA START :::::::-->
        <div class="skill-area primery-skill section-padding" id="perfil">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="primery-heading">
                            <strong class="filltext">Mi carrera</strong>
                            <small>Darwin J. Sansonneti D.</small>
                            <h2>Mi <span>perfil</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                         <div class="primery-info-content">
                            <p>Soy un desarrollador apasionado por lo que realiza y lo manifiesto en el código que desarrollo.</p>
                        </div>
                    </div>
                </div>
                <div class="space-60"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="skill-box skill-box2">
                            <h5>Información Personal</h5>
                            <p style="font-size: 14px; color: black;"><strong>Fecha Nacimiento:</strong> 06/02/1987</p>
                            <p style="font-size: 14px; color: black;"><strong>Email:</strong> sansonettidiazdarwinjose@gmail.com</p>
                            <p style="font-size: 14px; color: black;"><strong>Teléfono:</strong> + (58) 0412-8549569</p>
                            <p style="font-size: 14px; color: black;"><strong>País Natal:</strong> Venezuela</p>
                            <p style="font-size: 14px; color: black;"><strong>Dirección:</strong> Venezuela, Edo. Nueva Esparta (Isla de Margarita)</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="skill-box skill-box2">
                            <h5>Formación Profesional</h5>                            
                            <p style="font-size: 14px; color: black;">Agosto 2009 - Mayo 2014</p><br/>
                            <p style="text-align: justify;">Universidad de Oriente UDO, Nueva Esparta - Venezuela</p><br/>
                            <p style="font-size: 14px; color: black;"><strong>Titulo Obtenido:</strong> Licenciado en Informática.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="skill-box skill-box2">
                            <h5>Conocimiento y Habilidades</h5>
                            <ul style="font-size: 14px; color: #000; padding-left: 0px;">
                                <li><strong>Lenguajes:</strong> PHP, C#, C++, JavaScript</li>
                                <li><strong>Frameworks:</strong> Laravel, Yii2, ASP.NET, Xamarin</li>
                                <li><strong>Bases de Datos:</strong> MySQL, PostgreSQL, SQL Server, Firebird</li>
                                <li><strong>Herramientas:</strong> Git, Visual Studio, VS Code, Postman</li>
                                <li><strong>Otros:</strong> API REST, MVC, Desarrollo móvil (Xamarin), sistemas web y escritorio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--:::::SKILL AREA END :::::::-->

        <!--:::::SKILL AREA START :::::::-->
        <div class="skill-area primery-skill section-padding" id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="primery-heading">
                            <strong class="filltext">Mi carrera</strong>
                            <small>MI EXPERIENCIA</small>
                            <h2>Experiencia <span>laborales</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                         <div class="primery-info-content">
                            <p>Más de 10 años de experiencia en el desarrollo de sistemas, con un historial probado de éxitos en diferentes empresas.</p>
                        </div>
                    </div>
                </div>
                <div class="space-60"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="skill-box skill-box2">
                            <small>2022 - 2023 (Developer Full Stack)</small>
                            <h5>Bermann, Santiago de Chile</h5>
                            <p style="text-align: justify;">En esta empresa colaboré en sistemas relacionados con el seguimiento de vehículos con GPS, mantenimiento de los vehículos con alarmas programadas. 
                                Los sistemas están basados en el farmework Yii 2 de PHP y Base de Datos Postgres.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="skill-box skill-box2">
                            <small>2022 - 2023 (Frontend Developer C#)</small>
                            <h5>Global Sport 69, Venezuela</h5>
                            <p style="text-align: justify;">Acá desarrollé un sistema de escritorio, destinado a la venta de jugadas deportivas. Este sistema fue creado en Windows Form C#. Además, 
                                desarrolle su aplicación móvil en Xamarin Form con C#, en el cual se consumía api rest para el manejo de datos.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="skill-box skill-box2">
                            <small>2016 - 2019 (Mobile Developer)</small>
                            <h5>Free Code, Guatemala</h5>
                            <p style="text-align: justify;">Empresa Guatemalteca con extensión en Venezuela. Allí fui el encargado de desarrollar la aplicación móvil de la tienda online Chappsy. 
                                Esta aplicación fue desarrollada en Xamarin Form C#, con consumo de api rest para el manejo de la información.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--:::::SKILL AREA END :::::::-->
        
        <div class="container">
            <div class="border_separatior"></div>
        </div>


        <!--:::::PROJECT AREA START :::::::-->
        <div class="project-area project-area2 project-area-primery padding-top" id="proyectos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="primery-heading">
                            <strong class="filltext">mis proyectos</strong>
                            <small>WEB DESIGN</small>
                            <h2>Últimos <span>proyectos</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-center">
                         <div class="primery-info-content">
                            <p>Un proyecto sin planificación es como navegar sin mapa: te perderás en el camino.</p>
                        </div>
                    </div>
                </div>
                <div class="space-60"></div>
                <div class="row">
                    <ul id="da-thumbs" class="da-thumbs portfolio-carousel2 owl-carousel">
                        <li>
                            <a href="https://alcaldiamunicipiofernandopenalver.com.ve/" target="_blank">
                                <img src="{{ asset('img/project/1.png') }}" alt="">
                                <div><span>Alcaldía Fernando Peñalver</span></div>
                            </a>
                        </li>
                        <li>
                            <a href="https://nextheir.com/" target="_blank">
                                <img src="{{ asset('img/project/2.png') }}" alt="">
                                <div><span>Nextheir</span></div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.theendok.com/" target="_blank">
                                <img src="{{ asset('img/project/3.png') }}" alt="">
                                <div><span>The End Ok</span></div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ asset('img/project/4.png') }}" alt="">
                                <div>
                                    <span>Sport Book Venezuela</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="{{ asset('img/project/5.png') }}" alt="">
                                <div>
                                    <span>Puerto Canelo</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--:::::PROJECT AREA END :::::::-->

        <!--:::::BLOG AREA START :::::::-->
        <div class="blog-area section-padding" id="desktop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="primery-heading">
                            <strong class="filltext">Proyecto</strong>
                            <small>DESKTOP</small>
                            <h2>Sistemas <span>Desktop</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-center">
                         <div class="primery-info-content">
                            <p>Mi escritorio, mi dominio. Aquí construyo el futuro, línea por línea.</p>
                        </div>
                    </div>
                </div>
                <div class="space-60"></div> 
                <div class="row">
                    <div class="blogs owl-carousel">
                        <div class="single-blog">
                            <div class="single-blog-img">
                               <img src="{{ asset('img/blog/1.png') }}" alt="">
                            </div>
                            <div class="blog-description">
                                <p>Febrero 2025</p>
                                <a href="javascript:void(0)">Sistema Carfer - Login</a>
                            </div>
                           
                        </div>
                        <div class="single-blog">
                            <div class="single-blog-img">
                               <div class="single-blog-img">
                                   <img src="{{ asset('img/blog/2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="blog-description">
                                <p>Febrero 2025</p>
                                <a href="javascript:void(0)">Sistema Carfer - Productos</a>
                            </div>
                           
                        </div>
                        <div class="single-blog">
                            <div class="single-blog-img">
                               <div class="single-blog-img">
                                   <img src="{{ asset('img/blog/3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="blog-description">
                                <p>Febrero 2025</p>
                                <a href="javascript:void(0)">Sistema Carfer - Lista</a>
                            </div>
                           
                        </div>
                        <div class="single-blog">
                            <div class="single-blog-img">
                               <div class="single-blog-img">
                                   <img src="{{ asset('img/blog/4.png') }}" alt="">
                                </div>
                            </div>
                            <div class="blog-description">
                                <p>Noviembre 2014</p>
                                <a href="javascript:void(0)">Inventas</a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="single-blog-img">
                               <div class="single-blog-img">
                                   <img src="{{ asset('img/blog/5.png') }}" alt="">
                                </div>
                            </div>
                            <div class="blog-description">
                                <p>Noviembre 2014</p>
                                <a href="javascript:void(0)">Inventas - Productos</a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="single-blog-img">
                               <div class="single-blog-img">
                                   <img src="{{ asset('img/blog/6.png') }}" alt="">
                                </div>
                            </div>
                            <div class="blog-description">
                                <p>Noviembre 2014</p>
                                <a href="javascript:void(0)">Inventas - Totalizador</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--:::::BLOG AREA END :::::::-->

        <!--:::::TESTIMONIALS AREA START :::::::-->
        <div class="testimonials-area testimonials-area-primery section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center">
                        <div class="primery-heading">
                            <strong class="filltext">freelance</strong>
                            <small>Empresas</small>
                            <h2>Últimas <span>empresas</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-center">
                         <div class="primery-info-content">
                            <p>La única forma de hacer un gran trabajo es amar lo que haces.</p>
                        </div>
                    </div>
                </div>
                <div class="space-60"></div>
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="testimonials owl-carousel">
                            <div class="testimonial">
                                <div class="testimonial-img animated fadeInLeft">
                                    <img src="{{ asset('img/author/testimonial1.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-text animated fadeInDown">
                                    <img src="{{ asset('img/icon/quote.png') }}" alt="">
                                    <h4>Bermann, Santiago de Chile</h4>
                                    <p style="text-align: justify;">Empresa chilena de tecnología logística con más de 40 años de experiencia en el 
                                        mercado Latam Nos enfocamos en el cliente y ofrecemos plataformas SaaS, aplicaciones 
                                        responsivas de desarrollo propio y nativo. Acompañamos a nuestros clientes en sus 
                                        procesos de digitalización o transformación digital, gracias a la flexibilidad y 
                                        escalabilidad de nuestras soluciones. Además, nuestros módulos independientes y 
                                        complementarios nos permiten integrarnos con otros sistemas y ofrecer soluciones de punta a punta.</p>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-img">
                                    <img src="{{ asset('img/author/testimonial1.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-text animated fadeInDown">
                                    <img src="{{ asset('img/icon/quote.png') }}" alt="">
                                    <h4>Free Code, Venezuela - Guatemala</h4>
                                    <p style="text-align: justify;">Empresa venezolana con extensión en Guatemala, en la cual se desarrollan 
                                        diferentes sistemas de información y aplicaciones móviles destinadas a ser utilizadas en Guatemala. 
                                        Su sistema principal es Chappsy, creado como ecommerce web y funcionando también en aplicación móvil.</p>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="testimonial-img">
                                    <img src="{{ asset('img/author/testimonial1.jpg') }}" alt="">
                                </div>
                                <div class="testimonial-text animated fadeInDown">
                                    <img src="{{ asset('img/icon/quote.png') }}" alt="">
                                    <h4>PlayBook, Venezuela</h4>
                                    <p style="text-align: justify;">Es una página web desarrollada para funcionar como casa de apuestas de los 
                                        juegos que son tradición en Venezuela. Actualmente está en proceso de desarrollo y expansión. También 
                                        cuenta con una app, la cual se está desarrollando con flutter y será alimentada con una api rest 
                                        desarrollada en Laravel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--:::::TESTIMONIALS AREA END :::::::-->

        <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>

        <!--:::::FOOTER AREA START :::::::-->
        <div class="footer-area section-padding" style="background-image:url({{ asset('img/bg/footer-bg.png') }});background-size: cover;background-position: center;background-repeat: no-repeat;">
             <!--:::::LOGO AREA START :::::::-->
            <div class="space-100"></div>
            <!--:::::LOGO AREA END :::::::-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 m-auto text-center">
                            <div class="footer-menu">
                                <div class="d-flex justify-content-center">
                                    <div class="badge-base LI-profile-badge"
                                        data-locale="es_ES"
                                        data-size="medium"
                                        data-theme="light"
                                        data-type="VERTICAL"
                                        data-vanity="darwin-jose-sansonetti-diaz-577819297"
                                        data-version="v1">
                                        <a class="badge-base__link LI-simple-link"
                                            href="https://ve.linkedin.com/in/darwin-jose-sansonetti-diaz-577819297?trk=profile-badge"
                                            target="_blank" rel="noopener">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="space-40"></div>
                            <div class="copyright">
                                <p class="copyright">
                                    &copy; <script>document.write(new Date().getFullYear())</script> Creaciones DS - All Rights Reserved. Developed By <a href="https://www.creacionesms.com" target="_blank"><span class="text-danger" title="">CreacionesDS</span></a> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--:::::FOOTER AREA END :::::::-->                            
    </div> <!--:::::SITE AREA END :::::::-->

    <!--:::::ALL JS FILES :::::::-->
    <script src="{{ asset('js/plugins/jQuery.2.1.0.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-modal-video.min.js') }}"></script>
    <script src="{{ asset('js/plugins/stellarnav.js') }}"></script>
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('js/plugins/appear.js') }}"></script>
    <script src="{{ asset('js/plugins/easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/plugins/animatenumber.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bars.js') }}"></script>
    <script src="{{ asset('js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('js/plugins/isotop.v3.0.4.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>