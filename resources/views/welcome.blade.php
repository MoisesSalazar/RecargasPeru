@extends('HOME.general')
@section('content')
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="{{route('welcome')}}"><img src="{{asset('resources/HOME/images/logo1.png')}}" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-check"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">INICIO <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#video">VIDEO EXPLICATIVO</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">PRECIO</a>
                </li>
            </ul>
            <span class="nav-item">
                <a class="btn-outline-sm" href="{{route('login')}}">INICIAR SESION</a>
            </span>
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1>Sistema de Recargas y Pago de Servicios Perú</h1>
                        <p class="p-large">Sistemas fiables, sin caidas, asesoramiento exclusivo, solo para usted.</p>
                        <a class="btn-solid-lg page-scroll" href="{{route('register')}}">REGISTRARSE</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <div class="img-wrapper">
                            <img class="img-fluid" src="{{asset('resources/HOME/images/recargas.png')}}" alt="alternative">
                        </div> <!-- end of img-wrapper -->
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310">
    <defs>
        <style>
            .cls-1 {
                fill: #5f4def;
            }
        </style>
    </defs>
    <title>header-frame</title>
    <path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z" />
</svg>
<!-- end of header -->


<!-- Customers -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Image Slider -->
                <div class="slider-container">
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{('resources/HOME/images/visa.png')}}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{('resources/HOME/images/mastercard.png')}}" alt="alternative">
                            </div>
                           
                            
                        </div> <!-- end of swiper-wrapper -->
                    </div> <!-- end of swiper container -->
                </div> <!-- end of slider-container -->
                <!-- end of image slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of customers -->


<!-- Description -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="above-heading">DESCRIPCIÓN</div>
                <h2 class="h2-heading">Aqui te presentamos los sistemas</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{('resources/HOME/images/description-1.png')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Sistema de Recargas VisaNet</h4>
                        <p>Sistema Movil para Android, Apple y Huawei, te permite realizar Recargas, para Entel, Bitel, Claro y DirecTV Prepago.</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{('resources/HOME/images/description-2.png')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Sistema de Recargas Mastercard</h4>
                        <p>Sistema Movil solo para Android, te permite realizar Recargas, para Entel,Bitel,Claro y Movistar.</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{('resources/HOME/images/description-3.png')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Sistema Completo - Recarga y Pago de Servicios.</h4>
                        <p>Sistema Movil, contiene al Sistema de recargas de VisaNet, incluyendo pago de servicios.</p>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of description -->


<!-- Video -->
<div id="video" class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Video Preview -->
                <div class="image-container">
                    <div class="video-wrapper">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=DJrZ5QvL-Rk" data-effect="fadeIn">
                            <img class="img-fluid" src="{{asset('resources/HOME/images/empresas.png')}}" alt="alternative">
                            <span class="video-play-button">
                                <span></span>
                            </span>
                        </a>
                    </div> <!-- end of video-wrapper -->
                </div> <!-- end of image-container -->
                <!-- end of video preview -->

                <div class="p-heading">Aqui puedes visualizar el video explicativo de los sistemas que estamos afiliando.</div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of video -->


<!-- Pricing -->
<div id="pricing" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="above-heading">Precio</div>
                <h2 class="h2-heading">Planes de Afiliación</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">RECARGA VISANET</div>
                        <div class="price"><span class="currency">S/.</span><span class="value">50.00</span></div>
                        <div class="frequency">UNICO PAGO</div>
                        <div class="divider"></div>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Recargas para Claro,Entel,Bitel,DirecTV</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Paga el 5% de comisión</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Funciona con Wifi o Datos</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Sistema Operativo, Android, Apple, Huawei</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Fondo minimo Mutuo de S/.100</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="{{route('register')}}">REGISTRARME</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">RECARGA  MASTERCARD</div>
                        <div class="price"><span class="currency">S/.</span><span class="value">50.00</span></div>
                        <div class="frequency">UNICO PAGO</div>
                        <div class="divider"></div>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Recargas para Claro,Entel,Bitel y Movistar.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Paga el 3% de comisión.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Funciona con wifi y datos.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Solo para Android</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Fondo minimo mutuo de S/. 10.</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="{{route('register')}}">REGISTRARME</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

                <!-- Card-->
                <div class="card">
                    <!--<div class="label">
                            <p class="best-value">Best Value</p>
                        </div> -->
                    <div class="card-body">
                        <div class="card-title">SISTEMA COMPLETO</div>
                        <div class="price"><span class="currency">S/.</span><span class="value">60.00</span></div>
                        <div class="frequency">UNICO PAGO</div>
                        <div class="divider"></div>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Pago de Servicios, pedir por interno las empresas.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Incluye recargas de Visanet</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Las comisiones preguntar por interno.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Funciona con Wifi o Datos.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Fondo minimo Mutuo de S/. 100.</div>
                            </li>
                        </ul>
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="{{route('register')}}">REGISTRARME</a>
                        </div>
                    </div>
                </div> <!-- end of card -->
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of pricing -->


<!-- Testimonials -->
<div class="slider-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Text Slider -->
                <div class="slider-container">
                    <div class="swiper-container text-slider">
                        <div class="swiper-wrapper">

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="{{('resources/HOME/images/testimonial-1.jpg')}}" alt="alternative">
                                </div> <!-- end of image-wrapper -->
                                <div class="text-wrapper">
                                    <div class="testimonial-text">El Mejor sistema que me pude afiliar hasta el momento, Gracias por incorporar mas empresas para poder ganar mas comisiones.</div>
                                    <div class="testimonial-author">Cliente - 24/12/2020</div>
                                </div> <!-- end of text-wrapper -->
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="{{('resources/HOME/images/testimonial-2.jpg')}}" alt="alternative">
                                </div> <!-- end of image-wrapper -->
                                <div class="text-wrapper">
                                    <div class="testimonial-text">Todo okey, pero deberian de incluir a Movistar en el sistema de visanet, para no manejar dos sistemas, pero todo bien, gracias por su servicio.</div>
                                    <div class="testimonial-author">Cliente - 02/06/2019</div>
                                </div> <!-- end of text-wrapper -->
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="{{('resources/HOME/images/testimonial-3.jpg')}}" alt="alternative">
                                </div> <!-- end of image-wrapper -->
                                <div class="text-wrapper">
                                    <div class="testimonial-text">Deberian de aumentar mas empresas para ganar comisiones.</div>
                                    <div class="testimonial-author">Cliente - 14/02/2018</div>
                                </div> <!-- end of text-wrapper -->
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="{{('resources/HOME/images/testimonial-4.jpg')}}" alt="alternative">
                                </div> <!-- end of image-wrapper -->
                                <div class="text-wrapper">
                                    <div class="testimonial-text">Gracias, recomiendo este sistema, muy facil de usar y muy entendible. RECOMENDADO!!!</div>
                                    <div class="testimonial-author">Cliente - 12/04/2017</div>
                                </div> <!-- end of text-wrapper -->
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->

                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of text slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-2 -->
<!-- end of testimonials -->



<!-- Footer -->
<svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79">
    <defs>
        <style>
            .cls-2 {
                fill: #5f4def;
            }
        </style>
    </defs>
    <title>footer-frame</title>
    <path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)" />
</svg>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col first">
                    <h4>Acerca de Recargas Perú</h4>
                    <p class="p-small">Empresa Dedicada a la capacitación y afiliación de sistemas de Recargas.</p>
                </div>
            </div> <!-- end of col -->
            
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Contacto</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-envelope"></i>
                            <div class="media-body"><a class="white" href="mailto:contact@tivo.com"></a> <i class="fas fa-globe"></i><a class="white" href="#your-link">www.recargasperu.creative-alpha.com</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2022 Recargas Perú<br>
                    Distributed By <a href="#" target="_blank">Design MS</a>
                </p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->

@endsection