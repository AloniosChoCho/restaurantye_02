@extends('frontend.layouts.app')
@section('title')
    Error 404
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/innerpage-breadcrumb-bg-1.jpg') }} "  alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">404</h3>
    <ul class="breadcrumb-list">
    <li><a href="index.html">Inicio</a></li>
    <li>Error</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="error-page-area">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="error-wrapper">
    <div class="ew-img">
    <img src="{{ asset ('frontend/img/section-img/404.png') }} "    alt="">
    </div>
    <div class="ew-text">
    <h3>Lo sentimos, no podemos encontrar esa página</h3>
    <a href="index.html" class="btn-style-a">Volver a la página de inicio</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
@endsection