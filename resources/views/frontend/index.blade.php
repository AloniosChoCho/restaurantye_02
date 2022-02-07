<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<title>Dfoody - Restaurant HTML Template</title>
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

<header class="header-area dfoody-header">
<div class="dfoody-top-header">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="gth-content gth-left">
<p><i class="fa fa-map-marker" aria-hidden="true"></i>Materfront avenue, street 1F, USA</p>
</div>
</div>
<div class="col-md-6">
<div class="gth-content gth-right">
<p>Call Now: <a href="tel:8883875000">888.387.8888</a></p>
</div>
</div>
</div>
</div>
</div>
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
<input type="text" name="search-terms" id="search-terms" placeholder="Ingrese búsqueda...">
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


<section class="hero-area heroV1">

    <div class="hero-graphics">
    <img src="{{ asset ('frontend/img/graphic/hero-g-1.png') }} " alt="" class="hg hg-1">
    <img src="{{ asset ('frontend/img/graphic/hero-g-2.png') }} " alt="" class="hg hg-2">
    <img src="{{ asset ('frontend/img/graphic/hero-g-3.png') }} " alt="" class="hg hg-3">
    <img src="{{ asset ('frontend/img/graphic/hero-g-4.png') }} " alt="" class="hg hg-4">
    <img src="{{ asset ('frontend/img/graphic/hero-g-5.png') }} " alt="" class="hg hg-5">
    <img src="{{ asset ('frontend/img/graphic/hero-g-6.png') }} " alt="" class="hg hg-6">
    <img src="{{ asset ('frontend/img/graphic/hero-g-7.png') }} " alt="" class="hg hg-7">
    </div>
    <div class="container">
    <div class="hero-content">
    <div class="row">
    <div class="col-md-5">
    <div class="hero-text">
    <h6>Descubra su gusto</h6>
    <h2 class="wow fadeInUp" data-delay=".5s">Disfrute de nuestra deliciosa comida</h2>
    <p>El Dfoody es un restaurante de barrio que sirve
            cocina global de temporada impulsada por la feria.</p>
    <a href="#consult" class="btn-style-a smoothscroll" data-animation="fadeInUp" data-delay="0.85s">RESERVAR UNA MESA</a>
    </div>
    </div>
    <div class="col-md-7">
    <div class="hero-img">
    <img src="{{ asset ('frontend/img/section-img/hero1.png') }} " alt="">
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="about-area">
    <img src="{{ asset ('frontend/img/graphic/about-1.png') }} " alt="" class="about-graphic">
    <div class="container">
    <div class="row">
    <div class="col-md-7">
    <div class="about1-img">
    <img src="{{ asset ('frontend/img/section-img/about-1.jpg') }} " alt="">
    </div>
    </div>
    <div class="col-md-5">
    <div class="section-text about1-text">
    <div class="section-titleV1">
    <p>Bienvenido</p>
    <h3>Sobre Dfoddy</h3>
    </div>
    <p>Dfoody es un lugar donde se vende comida cocinada al público y donde la gente se sienta a comerla. 
     También es un lugar donde la gente va a disfrutar del tiempo y a comer una comida. Algunos restaurantes son una cadena, 
    lo que significa que hay restaurantes que tienen el mismo nombre y sirven y donde la gente la misma comida. 
    tiempo y a comer una comida. 
    Algunos restaurantes son una cadena, el tiempo y para comer una comida. Algunos restaurantes son una cadena.</p>
    <a href="#" class="btn-style-b">Más información</a>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="delicious-menu-area">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="section-titleV1">
    <p>explorar</p>
    <h3>Nuestro delicioso menú</h3>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="dm-food-tab">
    <div class="dft-nav">
    <nav>
    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-Breakfast-tab" data-toggle="tab" href="#nav-Breakfast" role="tab" aria-controls="nav-Breakfast" aria-selected="true">
    <div class="dftn-box">
    <img src="{{ asset ('frontend/img/food-menu/fmtnav-1.jpg') }} " alt="">
    <div class="dftnb-title">
    <p>Desayuno</p>
    </div>
    </div>
    </a>
    <a class="nav-item nav-link" id="nav-Lunch-tab" data-toggle="tab" href="#nav-Lunch" role="tab" aria-controls="nav-Lunch" aria-selected="false">
    <div class="dftn-box">
    <img src="{{ asset ('frontend/img/food-menu/lunch-1.jpg') }} " alt="">
    <div class="dftnb-title">
    <p>Almuerzo</p>
    </div>
    </div>
    </a>
    <a class="nav-item nav-link" id="nav-Dinner-tab" data-toggle="tab" href="#nav-Dinner" role="tab" aria-controls="nav-Dinner" aria-selected="false">
    <div class="dftn-box">
    <img src="{{ asset ('frontend/img/food-menu/dinner-1.jpg') }} " alt="">
    <div class="dftnb-title">
    <p>Cena</p>
    </div>
    </div>
    </a>
    <a class="nav-item nav-link" id="nav-Dessert-tab" data-toggle="tab" href="#nav-Dessert" role="tab" aria-controls="nav-Dessert" aria-selected="false">
    <div class="dftn-box">
    <img src="{{ asset ('frontend/img/food-menu/dessert-1.jpg') }} " alt="">
    <div class="dftnb-title">
    <p>Postre</p>
    </div>
    </div>
    </a>
    </div>
    </nav>
    </div>
    <div class="dft-content">
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-Breakfast" role="tabpanel" aria-labelledby="nav-Breakfast-tab">
    <div class="row">
    <div class="col-md-6">
    <div class="dft-menus">
    <ul class="dft-menulist">
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>15.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>20.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno.</p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>10.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>12.0</h3>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-md-6">
    <div class="dft-img">
    <img src="{{ asset ('frontend/img/food-menu/breakfast-1.jpg') }} " alt="">
    </div>
    </div>
     </div>
    </div>
    <div class="tab-pane fade" id="nav-Lunch" role="tabpanel" aria-labelledby="nav-Lunch-tab">
    <div class="row">
    <div class="col-md-6">
    <div class="dft-menus">
    <ul class="dft-menulist">
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>15.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>20.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>10.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>12.0</h3>
    </div>
    </div>
    </li>
    </ul>
     </div>
    </div>
    <div class="col-md-6">
    <div class="dft-img">
    <img src="{{ asset ('frontend/img/food-menu/lunch-1.jpg') }} " alt="">
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="nav-Dinner" role="tabpanel" aria-labelledby="nav-Dinner-tab">
    <div class="row">
    <div class="col-md-6">
    <div class="dft-menus">
    <ul class="dft-menulist">
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>15.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>20.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>10.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
     <div class="dfsl-price">
    <h3><span>$</span>12.0</h3>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-md-6">
    <div class="dft-img">
    <img src="{{ asset ('frontend/img/food-menu/dinner-1.jpg') }} " alt="">
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="nav-Dessert" role="tabpanel" aria-labelledby="nav-Dessert-tab">
    <div class="row">
    <div class="col-md-6">
    <div class="dft-menus">
    <ul class="dft-menulist">
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>15.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>20.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list">
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>10.0</h3>
    </div>
    </div>
    </li>
    <li>
    <div class="dft-single-list"> 
    <div class="dftsl-text">
    <h4>Barril de pan Kauntry Boy Brakfast</h4>
    <p>Recetas de pan para la merienda o el desayuno. </p>
    </div>
    <div class="dfsl-price">
    <h3><span>$</span>12.0</h3>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div class="col-md-6">
    <div class="dft-img">
    <img src="{{ asset ('frontend/img/food-menu/dessert-1.jpg') }} " alt="">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="why-choose-us-area">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="section-titleV1">
    <p>Nuestro servicio</p>
    <h3>Por qué elegirnos</h3>
    <p class="sub-title">La industria de servicios alimentarios o de catering define a aquellos negocios, instituciones y
            empresas responsables de cualquier comida preparada fuera del hogar. </p>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <div class="single-wcu">
    <div class="sw-icon">
    <img src="{{ asset ('frontend/img/icons/chef.png') }} " alt="">
    </div>
    <div class="sw-text">
    <h4>Mejor cocinero</h4>
    <p>Nuestro chef es un cocinero profesional capacitado y un comerciante que domina todos los aspectos de la preparación de alimentos</p>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-wcu">
    <div class="sw-icon">
    <img src="{{ asset ('frontend/img/icons/food.png') }} " alt="">
    </div>
    <div class="sw-text">
    <h4>Alimentos frescos</h4>
    <p>Los alimentos frescos son aquellos que no se han conservado y no se han estropeado todavía. Para las verduras y las frutas.</p>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-wcu">
    <div class="sw-icon">
    <img src="{{ asset ('frontend/img/icons/delivery.png') }} " alt="">
    </div>
    <div class="sw-text">
    <h4>Entrega rápida</h4>
    <p>Obtenga la entrega de comida rápida, rápidamente. Pedidos fáciles en línea para comida para llevar y entrega de restaurantes de comida rápida cerca de usted.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="food-video-area">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="youtube-videoplay-button">
    <a class="button is-play btn-Vplay play-1" href="https://www.youtube.com/watch?v=pIuCqUnvHdk">
    <div class="button-outer-circle has-scale-animation"></div>
    <div class="button-outer-circle has-scale-animation has-delay-short"></div>
    <div class="button-icon is-play">
    <svg height="100%" width="100%" fill="#b99165;">
    <polygon class="triangle" points="5,0 30,15 5,30"></polygon>
    <path class="path" d="M5,0 L30,15 L5,30z" fill="none" stroke="#b99165;" stroke-width="1"></path>
    </svg>
    </div>
    </a>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="most-popular-food-area">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="section-titleV1">
    <p>menú popular</p>
    <h3>Alimentos más populares</h3>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="most-poplar-food-wrappper">
    <div class="popular-food-carousel owl-carousel owl-theme">
    <div class="item">
    <div class="single-food-box">
    <div class="sfb-img">
    <img src="{{ asset ('frontend/img/food-menu/mpfood-1.jpg') }} " alt="">
    <div class="sfbi-btn">
    <a href="#" class="add-cart-btn">Añadir a la cesta</a>
    </div>
    </div>
    <div class="sbf-info">
    <h4>Pollo frito</h4>
    <ul class="sbfi-ratings">
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    </ul>
    <p class="price">$32.00</p>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="single-food-box">
    <div class="sfb-img">
    <img src="{{ asset ('frontend/img/food-menu/mpfood-2.jpg') }} " alt="">
    <div class="sfbi-btn">
    <a href="#" class="add-cart-btn">Añadir a la cesta</a>
    </div>
    </div>
    <div class="sbf-info">
    <h4>Pollo frito</h4>
    <ul class="sbfi-ratings">
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    </ul>
    <p class="price">$20.00</p>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="single-food-box">
    <div class="sfb-img">
    <img src="{{ asset ('frontend/img/food-menu/mpfood-3.jpg') }} " alt="">
    <div class="sfbi-btn">
    <a href="#" class="add-cart-btn">Añadir a la cesta</a>
    </div>
    </div>
    <div class="sbf-info">
    <h4>Pollo frito</h4>
    <ul class="sbfi-ratings">
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    </ul>
    <p class="price">$25.00</p>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="single-food-box">
    <div class="sfb-img">
    <img src="{{ asset ('frontend/img/food-menu/mpfood-2.jpg') }} " alt="">
    <div class="sfbi-btn">
    <a href="#" class="add-cart-btn">Añadir a la cesta</a>
    </div>
    </div>
    <div class="sbf-info">
    <h4>Pollo frito</h4>
    <ul class="sbfi-ratings">
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    <li><i class="fa fa-star" aria-hidden="true"></i></li>
    </ul>
    <p class="price">$20.00</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="testimonial-area">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div class="testimonial-img">
    <img src="{{ asset ('frontend/img/section-img/testimonial.jpg') }} " alt="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="section-titleV1">
    <p>Testimonio</p>
    <h3>Nuestro cliente dice</h3>
     </div>
    <div class="testimonial-wrapper wow fadeIn" data-wow-delay=".50s">
    <div class="testimonial-carousel owl-carousel owl-theme">
    <div class="item">
    <div class="single-testimonial">
    <div class="st-text">
    <p>Visitamos este lugar para desayunar y cenar. El lugar está muy bien situado (en la autopista)
     con un amplio espacio de aparcamiento. La comida en ambas comidas era sabrosa y 
     definitivamente vale la pena el precio. Buena cantidad servida por porción. El servicio también es bueno.</p>
    <h4>Thomas Paul <span>Cliente</span></h4>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="single-testimonial">
    <div class="st-text">
    <p>Visitamos este lugar para desayunar y cenar. 
            El lugar está muy bien situado (en la autopista) con un amplio espacio de aparcamiento. 
            La comida en ambas comidas era sabrosa y definitivamente vale la pena el precio. 
            Buena cantidad servida por porción. 
            El servicio también es bueno.</p>
    <h4>Thomas Paul <span>Cliente</span></h4>
    </div>
    </div>
    </div>
    <div class="item">
    <div class="single-testimonial">
    <div class="st-text">
    <p>Visitamos este lugar para desayunar y cenar. 
            El lugar está muy bien situado (en la autopista) con un amplio espacio de aparcamiento. 
            La comida en ambas comidas era sabrosa y definitivamente vale la pena el precio. 
            Buena cantidad servida por porción. 
            El servicio también es bueno.</p>
    <h4>Thomas Paul <span>Cliente</span></h4>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="blog-area">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="section-titleV1">
    <p>Nuestras noticias</p>
    <h3>Últimas publicaciones</h3>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-1.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el pollo chino picante para el clima frío</h4></a>
    <p>Debería ser suficiente para una libra más o menos, sal y pimienta. Caliente otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
    <a href="#javascript" class="read-more-btn-1">Leer más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-2.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el picante chino</h4></a>
    <p>Debería ser suficiente para una libra más o menos, sal y pimienta. Caliente otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
    <a href="#javascript" class="read-more-btn-1">Leer más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-3.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el picante chino</h4></a>
    <p>debería ser suficiente para una libra más o menos, sal y pimienta. Caliente otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
    <a href="#javascript" class="read-more-btn-1">Leer más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

<footer class="footer-area">
<div class="footer-widget-area">
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="f-widget footer-logo-info">
<img src="{{ asset ('frontend/img/logo.png') }} " alt="">
<div class="fw-contact">
<p><i class="fa fa-map-marker" aria-hidden="true"></i>Avenida Materfront, calle
2005F, USA</p>
<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+1 888.387.5000</a>
<a href="#">+1 888.387.5000</a>
<a href="#" class="fmail"><i class="fa fa-envelope" aria-hidden="true"></i><span class="__cf_email__" data-cfemail="f49d9a929bb49991909c919884da979b99">[email&#160;protected]</span></a>
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
