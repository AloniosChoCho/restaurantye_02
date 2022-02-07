@extends('frontend.layouts.app')
@section('title')
    Galeria 2
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/gallery-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Galería 2</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Galería 2</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="food-gallery-area">
    <div class="container">
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
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-12">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-8">
     <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="nav-Lunch" role="tabpanel" aria-labelledby="nav-Lunch-tab">
    <div class="row">
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-12">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
     </div>
    </div>
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="nav-Dinner" role="tabpanel" aria-labelledby="nav-Dinner-tab">
    <div class="row">
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-12">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} " alt="">
    <h4>Pollo frito</h4>
     </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="nav-Dessert" role="tabpanel" aria-labelledby="nav-Dessert-tab">
    <div class="row">
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-4.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-12">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-1.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-2.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-3.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    </div>
    </div>
     <div class="col-md-8">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-6.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-food-gallery">
    <a data-fancybox="gallery" href="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} ">
    <img src="{{ asset ('frontend/img/gallery/gFood2-5.jpg') }} " alt="">
    <h4>Pollo frito</h4>
    </a>
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
@endsection