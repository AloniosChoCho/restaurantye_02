@extends('frontend.layouts.app')
@section('title')
    Comprobación
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/cart-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Comprobación</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Comprobación</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="checkout-area">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="checkout-wrapper">
    <form action="#">
    <div class="coupon-area">
    <p>¿Tienes un cupón? <input type="text" id="coupon" name="coupon" placeholder="Clic aquí para ingresar código"></p>
    </div>
    <h3>Datos de facturación</h3>
    <div class="row">
    <div class="col-md-6">
    <label for="fname">Nombre<span>*</span></label>
    <input type="text" class="df-control" id="fname" name="fname" placeholder=" ">
    </div>
    <div class="col-md-6">
    <label for="lname">Apellido<span>*</span></label>
    <input type="text" class="df-control" id="lname" name="lname" placeholder=" ">
    </div>
    <div class="col-md-12">
    <label for="cname">Nombre de la empresa (opcional)<span>*</span></label>
    <input type="text" class="df-control" id="cname" name="cname" placeholder=" ">
    </div>
    <div class="col-md-12">
    <label for="country">País<span>*</span></label>
    <input type="text" class="df-control" id="country" name="country" placeholder="Bangladesh">
    </div>
    <div class="col-md-12">
    <label for="streetaddress">Dirección de la calle<span>*</span></label>
    <input type="text" class="df-control" id="streetaddress" name="streetaddress" placeholder="House number and street name">
    <input type="text" class="df-control" id="aptaddress" name="aptaddress" placeholder="apartment,suite,unit etc. (optional)">
    </div>
    <div class="col-md-12">
    <label for="city">Pueblo / Ciudad <span>*</span></label>
    <input type="text" class="df-control" id="city" name="city" placeholder=" ">
    </div>
    <div class="col-md-12">
    <label for="district">Distrito<span>*</span></label>
    <select name="district" id="district" class="df-control">
    <option value="0">Seleccione una opción</option>
    <option value="1">Dhaka</option>
    <option value="2">Cumilla</option>
    <option value="3">Jessore</option>
    <option value="4">Bogra</option>
    </select>
    </div>
    <div class="col-md-12">
    <label for="pcode">Código postal / ZIP (opcional)<span>*</span></label>
    <input type="text" class="df-control" id="pcode" name="pcode" placeholder=" ">
    </div>
    <div class="col-md-12">
    <label for="phone">Teléfono<span>*</span></label>
    <input type="text" class="df-control" id="phone" name="phone" placeholder=" ">
    </div>
    <div class="col-md-12">
    <label for="phone">Correo Electronico<span>*</span></label>
    <input type="email" class="df-control" id="email" name="email" placeholder=" ">
    </div>
    </div>
    <h3>Su pedido</h3>
    <div class="checkout-payment-table-box">
    <table class="checkout-table">
    <tr>
    <td>Producto</td>
    <td>Total</td>
    </tr>
    <tr>
    <td>Pollo frito</td>
    <td>$20.00</td>
    </tr>
    <tr>
    <td>Subtotal</td>
    <td>$20.00</td>
    </tr>
    <tr>
    <td>Envío</td>
    <td>Envío gratuito</td>
    </tr>
    <tr>
    <td>Total</td>
    <td>$20.00</td>
    </tr>
    </table>
    <p>Por favor, envíe un cheque a Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
    </div>
    <input type="submit" class="bfs-btn" value="RESERVAR UNA MESA">
    </form>
    </div>
    </div>
    </div>
    </div>
    </section>
    
@endsection