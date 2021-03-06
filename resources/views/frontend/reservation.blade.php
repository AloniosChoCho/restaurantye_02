@extends('frontend.layouts.app')
@section('title')
    Reservaciones
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/reservation-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Reserva</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Reserva</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="booking-area reservation-wrapper">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="booking-form">
    <div class="section-titleV2">
    <h3>Reserve su mesa en línea</h3>
    </div>
    <div class="bform">
    <form action="#">
    <div class="row">
    <div class="col-md-6">
    <input type="text" class="df-control" id="name" name="name" placeholder="Nombre *">
    </div>
    <div class="col-md-6">
    <input type="text" class="df-control" id="phone" name="phone" placeholder="Teléfono *">
    </div>
    <div class="col-md-6">
    <input type="date" class="df-control" id="date" name="date">
    </div>
    <div class="col-md-6">
    <select name="time" id="time" class="df-control">
    <option value="0">00.00</option>
    <option value="1">01.00</option>
    <option value="2">02.00</option>
    <option value="3">03.00</option>
    <option value="4">04.00</option>
    <option value="5">05.00</option>
    <option value="6">06.00</option>
    <option value="7">07.00</option>
    <option value="8">08.00</option>
    <option value="9">09.00</option>
    <option value="10">10.00</option>
    <option value="11">11.00</option>
    <option value="12">12.00</option>
    <option value="13">13.00</option>
    <option value="14">14.00</option>
    <option value="15">15.00</option>
    <option value="16">16.00</option>
    <option value="17">17.00</option>
    <option value="18">18.00</option>
    <option value="19">19.00</option>
    <option value="20">20.00</option>
    <option value="21">21.00</option>
    <option value="22">22.00</option>
    <option value="23">23.00</option>
    </select>
    </div>
    <div class="col-md-6">
    <input type="text" class="df-control" id="seat" name="seat" placeholder="Asiento *">
    </div>
    <div class="col-md-6">
    <input type="email" class="df-control" id="email" name="email" placeholder="Correo Electronico *">
    </div>
    <div class="col-md-12">
    <textarea name="msg" id="msg" class="df-control" placeholder="Mensaje *"></textarea>
    </div>
    <div class="col-md-6">
    <input type="submit" class="bfs-btn" value="Enviar mensaje">
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4">
    <div class="single-reserve-contact">
    <h4>Dirección:</h4>
    <p>55/K Middle Street, Newro JK,
    New York, USA</p>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-reserve-contact">
    <h4>Teléfono:</h4>
    <p>+44 8585 9595 - 77</p>
    <p>+88 4747 9586 - 22</p>
    </div>
    </div>
    <div class="col-md-4">
    <div class="single-reserve-contact">
    <h4>Correo Electronico:</h4>
    <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="31505c50585d715c54494543545e1f525e5c">[email&#160;protected]</a></p>
    <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87e9e2f0eae6eeebc7eae2fff3f5e2e8a9e4e8ea">[email&#160;protected]</a></p>
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
@section('reservation')
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    var user_lat, user_lng;
    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('googleMap'), {
            center: {
                lat: -37.815340,
                lng: 144.963230
            },
            zoom: 15,
            scrollwheel: false
        });
        var marker = new google.maps.Marker({
            position: {
                lat: -37.815340,
                lng: 144.963230
            },
            map: map,
            title: 'Voidcoders'
        });
    }
</script>
@endsection