@extends('frontend.layouts.app')
@section('title')
    Blog-2
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/blog2-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Blog</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Blog</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="blog-page-area">
    <div class="container">
    <div class="row">
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-12">
    <div class="single-blogV1 blog-full-width">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog2-1.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>by<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    <li>Tags: <span>chicken, lunch, recipy</span></li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el pollo chino picante para el tiempo frío</h4></a>
    <p>Esta va a ser otra receta de pollo frito...¿Crees que, hay suficiente pollo frito en internet? si lo hay..¿Crees que necesitas otra? No, no lo necesitamos... Sí lo necesito, voy a darte otra de todos modos... Porque esta es especial. Este es picante y muy sabroso... Es uno de los favoritos de mi marido.</p>
    <a href="#javascript" class="read-more-btn-1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="single-blogV1 blog-full-width">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog2-1.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>by<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    <li>Tags: <span>chicken, lunch, recipy</span></li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el pollo chino picante para el tiempo frío</h4></a>
    <p>Esta va a ser otra receta de pollo frito...¿Crees que, hay suficiente pollo frito en internet? si lo hay..¿Crees que necesitas otra? No, no lo necesitamos... Sí lo necesito, voy a darte otra de todos modos... Porque esta es especial. Este es picante y muy sabroso... Es uno de los favoritos de mi marido.</p>
    <a href="#javascript" class="read-more-btn-1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="pagination-area">
    <nav aria-label="Page navigation">
    <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Ant</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Sig<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
    </ul>
    </nav>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="blog-sidebar">
    <div class="df-widget df-search">
    <div class="dfs-form">
    <form>
    <input type="text" placeholder="search.....">
    <button type="submit" class="dfs-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    </div>
    </div>
    <div class="df-widget df-category">
    <h4>Categorías</h4>
    <ul class="df-cat-list">
    <li><a href=#javascript>Cena (5)</a></li>
    <li><a href=#javascript>Comida rápida (4)</a></li>
    <li><a href=#javascript>Brakfast (6)</a></li>
    <li><a href=#javascript>Almuerzo (8)</a></li>
    <li><a href=#javascript>Postre (7)</a></li>
    <li><a href=#javascript>Recetas (5)</a></li>
    </ul>
    </div>
    <div class="df-widget df-recent-post">
    <h4>Mensaje reciente</h4>
    <div class="rp-box">
    <div class="single-rp">
    <div class="dfpp-img">
    <img src="{{ asset ('frontend/img/blog/rp-1.jpg') }} " alt="">
    </div>
    <div class="dfpp-text">
    <h5><a href="#">Cómo cocinar el pollo chino picante Para el frío</a></h5>
    <p>10 de enero de 2020</p>
    </div>
    </div>
    <div class="single-rp">
    <div class="dfpp-img">
    <img src="{{ asset ('frontend/img/blog/rp-2.jpg') }} " alt="">
    </div>
    <div class="dfpp-text">
    <h5><a href="#">Cómo cocinar el pollo chino picante Para el frío</a></h5>
    <p>10 de enero de 20200</p>
    </div>
    </div>
    <div class="single-rp">
    <div class="dfpp-img">
     <img src="{{ asset ('frontend/img/blog/rp-3.jpg') }} " alt="">
    </div>
    <div class="dfpp-text">
    <h5><a href="#">Cómo cocinar el pollo chino picante Para el frío</a></h5>
    <p>10 de enero de 2020</p>
    </div>
    </div>
    </div>
    </div>
    <div class="df-widget df-tags">
    <h4>Tags</h4>
    <ul class="df-tag-list">
    <li><a href=#javascript>delicioso</a></li>
    <li><a href=#javascript>cena</a></li>
    <li><a href=#javascript>desayuno</a></li>
    <li><a href=#javascript>almuerzo</a></li>
    <li><a href=#javascript>comida rápida</a></li>
    <li><a href=#javascript>postre</a></li>
    <li><a href=#javascript>buena comida</a></li>
    </ul>
    </div>
    <div class="df-widget df-gallery">
    <h4>Galería</h4>
    <ul class="df-gallery-list">
    <li>
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood-L-1.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood-1.jpg') }} " alt="">
    </a>
    </li>
    <li>
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood-L-2.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood-2.jpg') }} " alt="">
    </a>
    </li>
    <li>
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood-L-3.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood-3.jpg') }} " alt="">
    </a>
    </li>
    <li>
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood-L-4.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood-4.jpg') }} " alt="">
    </a>
    </li>
    <li>
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood-L-5.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood-5.jpg') }} " alt="">
    </a>
    </li>
    <li>
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood-L-6.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood-6.jpg') }} " alt="">
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection