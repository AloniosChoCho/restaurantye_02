@extends('frontend.layouts.app')
@section('title')
    Menu
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/menu1-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Menú</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Menú</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="delicious-menu-area foodmenu-page-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="section-titleV2">
    <h3>Nuestro delicioso menú</h3>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="dm-food-tab dmftV2">
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
    <p>Recetas de pan para la merienda o el desayuno.</p>
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
@endsection