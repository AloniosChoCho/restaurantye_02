@extends('frontend.layouts.app')
@section('title')
    Carrito
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/cart-bc.jpg') }} " alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Carrito</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>Carrito</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="cart-area">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-12">
    <div class="cart-c-box">
    <div class="ccbt">
    <table class="cart-table">
    <thead>
    <tr>
    <th> </th>
    <th>Producto</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Total</th>
    <th> </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <div class="c-product-thumb">
    <img src="{{ asset ('frontend/img/food-menu/cart-table-food.jpg') }} " alt="">
    </div>
    </td>
    <td>
    <p>Pollo frito</p>
    </td>
    <td>
    <p>$20.00</p>
    </td>
    <td>
    <div class="cartinc-dec">
    <input type="text" name="qty" maxlength="12" value="0" class="input-text qty" />
    <div class="button-inc-dec">
    <button class="cart-qty-plus" type="button" value="+"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
    <button class="cart-qty-minus" type="button" value="-"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
    </div>
    </div>
    </td>
    <td>
    <p>$20.00</p>
    </td>
    <td>
    <div class="c-remove">
    <div class="cr-icon">
    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
    </div>
    </td>
    </tr>
    <tr>
    <td>
    <div class="c-product-thumb">
    <img src="{{ asset ('frontend/img/food-menu/cart-table-food.jpg') }} " alt="">
    </div>
    </td>
    <td>
    <p>Pollo frito</p>
    </td>
    <td>
    <p>$20.00</p>
    </td>
    <td>
    <div class="cartinc-dec">
    <input type="text" name="qty" maxlength="12" value="0" class="input-text qty" />
    <div class="button-inc-dec">
    <button class="cart-qty-plus" type="button" value="+"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
    <button class="cart-qty-minus" type="button" value="-"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
    </div>
    </div>
    </td>
    <td>
    <p>$20.00</p>
    </td>
    <td>
    <div class="c-remove">
    <div class="cr-icon">
    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    <div class="cart-cuopon-box">
    <input type="text" id="coupon" name="coupon" placeholder="Código del cupón">
    <input type="submit" class="bfs-btn" value="Aplicar el cupón">
    </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-12">
    <div class="cart-ct-box">
    <div class="ccbt">
    <table class="cart-total-table">
    <thead>
    <tr>
    <th>Totales de la cesta</th>
    <th> </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>
    <p>Subtotal</p>
    </td>
    <td>
    <p>$20.00</p>
    </td>
    </tr>
    <tr>
    <td>
    <p>Total</p>
    </td>
    <td>
    <p>$20.00</p>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    <a href="#" class="btn-style-a">pasar a la caja</a>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection