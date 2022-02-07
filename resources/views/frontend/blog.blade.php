@extends('frontend.layouts.app')
@section('title')
    Blog
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/blog1-bc.jpg') }} " alt="" class="breadcrumb-bg">
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
    <p>Se puede hacer para una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio.</p>
    <a href="#javascript" class="read-more-btn-1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
    <p>Se puede hacer con una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio.</p>
    <a href="#javascript" class="read-more-btn-1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
    <p>Se puede hacer con una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio.</p>
    <a href="#javascript" class="read-more-btn-1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-4.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el pollo chino picante para el clima frío</h4></a>
    <p>Se puede hacer para una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
    <a href="#javascript" class="read-more-btn-1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-5.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el picante chino</h4></a>
    <p>Se puede hacer con una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
    <a href="#javascript" class="read-more-btn-1">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-6.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="#javascript"><h4>Cómo cocinar el picante chino</h4></a>
    <p>Se puede hacer con una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
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
    </section>
@endsection