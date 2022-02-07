<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<title>@yield('title') - Restaurant HTML Template</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">


<link rel="stylesheet" href="{{ asset ('frontend/css/bootstrap.min.css') }} ">

<link rel="stylesheet" href="{{ asset ('frontend/css/jquery-ui.css') }} ">

<link rel="stylesheet" href="{{ asset ('frontend/css/sm-core-css.css') }} " />
<link rel="stylesheet" href="{{ asset ('frontend/css/sm-simple.css') }} " />

<link rel="stylesheet" href="{{ asset ('frontend/css/font-awesome.min.css') }} ">

<link rel="stylesheet" href="{{ asset ('frontend/flaticon/flaticon.css') }} ">

<link rel="stylesheet" href="{{ asset ('frontend/css/owl.carousel.min.css') }} ">
<link rel="stylesheet" href="{{ asset ('frontend/css/owl.theme.default.min.css') }} ">
<link rel="stylesheet" href="{{ asset ('frontend/css/jquery.fancybox.min.css') }} " />

<link rel="stylesheet" href="{{ asset ('frontend/slick/slick-theme.css') }} ">
<link rel="stylesheet" href="{{ asset ('frontend/slick/slick.css') }} ">

<link href="{{ asset ('frontend/YoutubeVideoModalPlugin/jquery.yu2fvl.css') }} " rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{ asset ('frontend/css/animate.css') }} ">

<link rel="stylesheet" href="{{ asset ('frontend/css/style.css') }} ">

<link rel="stylesheet" href="{{ asset ('frontend/css/responsive.css') }} ">

<link rel="shortcut icon" type="image/png') }} " href="{{ asset ('frontend/img/favicon.ico') }} ">



</head>
<body>
<div id="preloader"></div>

<header class="header-area dfoody-header dfdV2 ipHeader">
<div class="dfoody-header-box">
<div class="container">
<div class="row">
<div class="col-3 col-md-3">
<div class="logo-wrapper">
<a href="{{ route('inicio') }}">
<img src="{{ asset ('frontend/img/logo.png') }} " alt="">
</a>
</div>
</div>
<div class="col-9 col-md-9">
<div class="gm-box">
<div class="gmb-contact">
<p>Call Now: <a href="tel:8883875000">888.387.8888</a></p>
</div>
<div class="dfoody-menu-wrapper">

        <input id="dfoodyMenu-state" type="checkbox" />
        <label class="dfoodyMenu-btn" for="dfoodyMenu-state">
        <span class="dfoodyMenu-btn-icon"></span>
        </label>
        <ul id="dfoodyMenu" class="sm sm-simple dfoody-menu">
        <li><a href="{{ route('inicio') }}">Inicio</a>
        
        </li>
        <li><a href="{{ route('about') }}">Acerca de</a></li>
        <li>
        <a href="{{ route('reservation') }}">Reserva</a>
        </li>
        <li>
        <a href="{{ route('food') }}">Menú</a>
        </li>
        <li>
        <a href="{{ route('blog') }}">Blog</a>
        <ul>
        <li>
        <a href="{{ route('blog') }}">Blog</a>
        </li>
        <li>
        <a href="{{ route('blog-2') }}">Blog 2</a>
        </li>
        <li>
        <a href="{{ route('detalles') }}">Blog Solo</a>
        </li>
        </ul>
        </li>
        <li>
        <a href="#">Páginas</a>
        <ul>
        <li>
        <a href="{{ route('contact') }}">Contacte con</a>
        </li>
        <li>
        <a href="{{ route('gallery1') }}">Galería 1</a>
        </li>
        <li>
        <a href="{{ route('gallery2') }}">Galería 2</a>
        </li>
        <li>
        <a href="{{ route('shop') }}">Tienda</a>
        </li>
        <li>
        <a href="{{ route('cart') }}">Carrito</a>
        </li>
        <li>
        <a href="{{ route('check') }}">Comprobación</a>
        </li>
        <li>
        <a href="{{ route('faq') }}">FAQ</a>
        </li>
        <li>
        <a href="{{ route('404') }}">404</a>
        </li>
        <li>
        <a href="{{ route('prox') }}">Próximamente</a>
        </li>
        </ul>
        </li>
        </ul>
         </div>
<div class="mt-icons">
<ul class="mti-list">
<li>
<span class="searchIcon">
<i class="flaticon-search"></i>
</span>
<div class="hSearchBox">
 <form id="search" action="#" method="post">
<div class="search-o-group">
<input type="text" name="search-terms" id="search-terms" placeholder="Enter search terms...">
<button type="submit" class="osearch-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
</form>
</div>
</li>
<li>
<span id="cart"><i class="flaticon-shopping-cart"></i><span class="badge">02</span></span>
<div class="shopping-cart">
<div class="shopping-cart-header">
<div class="shopping-cart-total">
<span class="lighter-text">Total:</span>
<span class="main-color-text total">$461.15</span>
</div>
</div>

<ul class="shopping-cart-items">
<li>
<img src="{{ asset ('frontend/img/food-menu/mpfood-1.jpg') }} " alt="" />
<span class="item-name">XMREDTREE</span>
<span class="item-price">$49.50</span>
<span class="item-quantity">Cantidad: 01</span>
<span class="cartProduct-remove">
<i class="fa fa-times" aria-hidden="true"></i>
</span>
</li>
<li>
<img src="{{ asset ('frontend/img/food-menu/mpfood-2.jpg') }} " alt="" />
<span class="item-name">XMWHREIN</span>
<span class="item-price">$34.06</span>
<span class="item-quantity">Cantidad: 10</span>
<span class="cartProduct-remove">
<i class="fa fa-times" aria-hidden="true"></i>
</span>
</li>
<li>
<img src="{{ asset ('frontend/img/food-menu/mpfood-3.jpg') }} " alt="" />
<span class="item-name">XMJBRR</span>
<span class="item-price">$14.21</span>
<span class="item-quantity">Cantidad: 5</span>
<span class="cartProduct-remove">
<i class="fa fa-times" aria-hidden="true"></i>
</span>
</li>
 </ul>
<a href="#" class="button">Comprobación</a>
</div>

</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</header>


@yield('content')

<footer class="footer-area">
<div class="footer-widget-area">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="f-widget footer-logo-info">
<img src="{{ asset ('frontend/img/logo.png') }} " alt="">
<div class="fw-contact">
<p><i class="fa fa-map-marker" aria-hidden="true"></i>Materfront avenue, street
2005F, USA</p>
<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+1 888.387.5000</a>
<a href="#">+1 888.387.5000</a>
<a href="#" class="fmail"><i class="fa fa-envelope" aria-hidden="true"></i><span class="__cf_email__" data-cfemail="d2bbbcb4bd92bfb7b6bab7bea2fcb1bdbf">[email&#160;protected]</span></a>
</div>
</div>
<div class="footer-social-widget">
        <h4>Siga con nosotros :</h4>
        <ul class="footer-social">
        <li><a href="https://twitter.com/voidcoders"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="https://www.facebook.com/voidcoders/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/voidcoders/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="https://www.linkedin.com/company/voidcoders/about/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
        </div>
        </div>
        <div class="col-md-4">
        <div class="row">
        <div class="col-md-6">
        <div class="f-widget">
        <h4>Enlaces útiles</h4>
        <ul class="fw-links">
        <li><a href="#">Inicio</a></li>
         <li><a href="#">Acerca de</a></li>
        <li><a href="#">reserva</a></li>
        <li><a href="#">Contactos</a></li>
        <li><a href="#">Nuestro menú</a></li>
        <li><a href="#">Blog</a></li>
        </ul>
        </div>
        </div>
        <div class="col-md-6">
        <div class="f-widget">
        <h4>Extras</h4>
        <ul class="fw-links">
        <li><a href="#">Mi pedido</a></li>
        <li><a href="#">Comprobación</a></li>
        <li><a href="#">Abastecimiento</a></li>
        <li><a href="#">Nuestras sedes</a></li>
        <li><a href="#">Política de privacidad</a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>
<div class="col-md-4">
<div class="f-widget f-instawiget">
<h4>Instagram</h4>
<ul class="fw-instagram">
<li><a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/insta-1.jpg') }} "><img src="{{ asset ('frontend/img/gallery/insta-1.jpg') }} " alt=""></a></li>
<li><a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/insta-2.jpg') }} "><img src="{{ asset ('frontend/img/gallery/insta-2.jpg') }} " alt=""></a></li>
<li><a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/insta-3.jpg') }} "><img src="{{ asset ('frontend/img/gallery/insta-3.jpg') }} " alt=""></a></li>
 <li><a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/insta-4.jpg') }} "><img src="{{ asset ('frontend/img/gallery/insta-4.jpg') }} " alt=""></a></li>
<li><a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/insta-5.jpg') }} "><img src="{{ asset ('frontend/img/gallery/insta-5.jpg') }} " alt=""></a></li>
<li><a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/insta-6.jpg') }} "><img src="{{ asset ('frontend/img/gallery/insta-6.jpg') }} " alt=""></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="footer-copyright-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="copyright-text">
<p>© 2020 Dfoody! All Rights Reserved By <a href="#">VoidCoders</a></p>
</div>
</div>
</div>
</div>
</div>
</footer>

@yield('reservation')

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset ('frontend/js/jquery-3.2.0.min.js') }} "></script>
<script src="{{ asset ('frontend/js/jquery-ui.js') }} "></script>

<script src="{{ asset ('frontend/js/jquery.smartmenus.min.js') }} "></script>

<script src="{{ asset ('frontend/js/owl.carousel.min.js') }} "></script>

<script src="{{ asset ('frontend/slick/slick.min.js') }} "></script>

<script src="{{ asset ('frontend/js/jquery.counterup.min.js') }} "></script>
<script src="{{ asset ('frontend/js/countdown.js') }} "></script>
<script src="{{ asset ('frontend/js/jquery.scrollUp.js') }} "></script>
<script src="{{ asset ('frontend/js/jquery.waypoints.min.js') }} "></script>
<script src="{{ asset ('frontend/js/jquery.fancybox.min.js') }} "></script>
<script src="{{ asset ('frontend/js/wow.min.js') }} "></script>

<script src="{{ asset ('frontend/YoutubeVideoModalPlugin/jquery.yu2fvl.js') }} "></script>

<script src="{{ asset ('frontend/js/bootstrap.min.js') }} "></script>

<script src="{{ asset ('frontend/js/theme.js') }} "></script>
</body>
</html>
