@extends('frontend.layouts.app')
@section('title')
    Contacte Con
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/contact-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Contacto</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Contacto</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="contact-area">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div class="contact-form">
    <div class="section-titleV2">
    <h3>Póngase en contacto con nosotros</h3>
    </div>
    <div class="bform">
    <form class="cf" method="post" action="{{ asset ('frontend/https://demo.voidcoders.com/htmldemo/dfoody/main-files/frontend/php/mail.php') }} " id="cf">
    <input type="text" class="df-control" id="firstName" name="firstName" placeholder="Nombre *">
    <input type="text" class="df-control" name="phone" id="phone" placeholder="Telefono *">
    <input type="email" class="df-control" id="email" name="email" placeholder="Correo Electronico *">
    <textarea id="msg" name="msg" class="df-control" placeholder="Mensaje *"></textarea>
    <button type="submit" id="submit" name="submit" class="cf-btn bfs-btn">Enviar mensaje</button>
    <div class="cf-msg"></div>
    </form>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="contact-form">
    <div class="section-titleV2">
    <h3>Información de contacto</h3>
    </div>
    <div class="cinfo">
    <div class="single-reserve-contact">
    <h4>Dirección:</h4>
    <p>55/K Middle Street, Newro JK,
    New York, USA</p>
    </div>
    <div class="single-reserve-contact">
    <h4>Teléfono:</h4>
    <p>+44 8585 9595 - 77</p>
    <p>+88 4747 9586 - 22</p>
    </div>
    <div class="single-reserve-contact">
    <h4>Correo Electronico:</h4>
    <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9afbf7fbf3f6daf7ffe2eee8fff5b4f9f5f7">[email&#160;protected]</a></p>
    <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="422c27352f232b2e022f273a3630272d6c212d2f">[email&#160;protected]</a></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="map-area">
    <div class="contact-map">
    <div id="googleMap"></div>
    </div>
    </section>
@endsection