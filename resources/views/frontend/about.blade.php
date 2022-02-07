@extends('frontend.layouts.app')
@section('title')
    About
@endsection
@section('subtitle')
    Sobre Nosotros
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/about-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Sobre nosotros</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Sobre nosotros</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>

    <section class="about2-area">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div class="testimonial-img aboutp3-img">
    <img src="{{ asset ('frontend/img/section-img/about-3.jpg') }} " alt="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="section-text about1-text a2text">
    <div class="section-titleV2">
    <h3>Sobre Dfoddy</h3>
    </div>
    <p>Dfoody es un lugar donde se vende comida cocinada al público y donde la gente se sienta a comerla. También es un lugar donde la gente va a disfrutar del tiempo y a comer una comida. Algunos restaurantes son una cadena, lo que significa que hay restaurantes que tienen el mismo nombre y sirven y donde la gente la misma comida. tiempo y a comer una comida. Algunos restaurantes son una cadena, el tiempo y para comer una comida. Algunos restaurantes son una cadena.</p>
            <p>Nuestro restaurante de cocina múltiple ofrece sofisticadas interpretaciones de la comida tradicional acentuadas con toques artísticos, presentando una de las experiencias gastronómicas más singulares de Khulna. La combinación de un servicio amable, una cocina inventiva, una decoración elegante y unas vistas impresionantes garantizan que el restaurante sea un éxito tanto para los huéspedes como para los lugareños. Utilizando sus vistas panorámicas de la ciudad como inspiración, el punto focal del restaurante es una increíble vista de la ciudad.</p>
    
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6">
    <div class="section-text about1-text a2text">
    <div class="section-titleV2">
    <h3>Nuestra historia</h3>
    </div>
    <p>Dfoody es un lugar donde se vende comida cocinada al público y donde la gente se sienta a comerla. También es un lugar donde la gente va a disfrutar del tiempo y a comer una comida. Algunos restaurantes son una cadena, lo que significa que hay restaurantes que tienen el mismo nombre y sirven y donde la gente la misma comida. tiempo y a comer una comida. Algunos restaurantes son una cadena, el tiempo y para comer una comida. Algunos restaurantes son una cadena.</p>
            <p>Nuestro restaurante de cocina múltiple ofrece sofisticadas interpretaciones de la comida tradicional acentuadas con toques artísticos, presentando una de las experiencias gastronómicas más singulares de Khulna. La combinación de un servicio amable, una cocina inventiva, una decoración elegante y unas vistas impresionantes garantizan que el restaurante sea un éxito tanto para los huéspedes como para los lugareños. Utilizando sus vistas panorámicas de la ciudad como inspiración, el punto focal del restaurante es una increíble vista de la ciudad.</p>
    
    </div>
    </div>
    <div class="col-md-6">
    <div class="aboutp4-img">
    <img src="{{ asset ('frontend/img/section-img/about-4.jpg') }} " alt="">
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
@endsection