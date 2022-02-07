@extends('frontend.layouts.app')
@section('title')
    Blog Details
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/blog3-bc.jpg') }} " alt="" class="breadcrumb-bg">
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
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    <li>Etiquetas: <span>chicken, lunch, recipy</span></li>
    </ul>
    <a href="{{ route('detalles') }}"><h4>Cómo cocinar el pollo chino picante para el tiempo frío</h4></a>
    <p>Esta va a ser otra receta de pollo frito...¿Crees que, hay suficiente pollo frito en internet? si lo hay..¿Crees que necesitas otra? No, no lo necesitamos... Sí lo necesito, voy a darte otra de todos modos... Porque esta es especial. Este es picante y muy sabroso... Es uno de los favoritos de mi maridito.
    <p>El derecho de los seguros es la práctica del derecho que rodea a los seguros, incluyendo las pólizas de seguros y las reclamaciones. Se puede dividir a grandes rasgos en tres categorías: la regulación del negocio de los seguros; la regulación del contenido de las pólizas de seguros, especialmente en lo que respecta a las pólizas de los consumidores; y la regulación de la gestión de las reclamaciones.</p>
    <p>El derecho de los seguros se divide en tres grandes categorías. En primer lugar, la compañía de seguros contratará abogados para representar al asegurado en caso de que sea demandado por algo relacionado con su contrato de seguro. Estos se conocen como "abogados defensores de seguros". Por ejemplo, una compañía de seguros de automóviles contratará a un abogado para que represente a una conductora asegurada cuando sea demandada por haber causado lesiones a otro conductor. 
    La segunda categoría del derecho de seguros ayuda a los asegurados a determinar cuándo una compañía de seguros debe pagar una reclamación. En tercer lugar, las compañías de seguros suelen contratar abogados para asegurarse de que la compañía cumple con todas las leyes y reglamentos aplicables, que pueden variar según el estado.</p>
    <p>Hay muchos tipos de seguros. El gobierno gestiona algunos tipos de seguros, como el de incapacidad de la Seguridad Social, el de compensación a los trabajadores y el de desempleo. Sin embargo, el término "ley de seguros" suele referirse a la ley que rodea a los seguros privados. Los tipos más comunes de seguros privados son el seguro de salud, el seguro de responsabilidad civil del automóvil, el seguro de la vivienda, el seguro de vida, el seguro de títulos y el seguro de mala praxis.</p> 
    </div> 
    </div>
    </div>
    <div class="col-md-12">
    <div class="related-post-area">
    <div class="section-titleV2">
    <h3>Entrada relacionada</h3>
    </div>
    <div class="row">
    <div class="col-md-6">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-1.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="{{ route('detalles') }}"><h4>Cómo cocinar el pollo chino picante para el clima frío</h4></a>
    <p>Se puede hacer para una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
    <a href="{{ route('detalles') }}" class="read-more-btn-1">Leer más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="single-blogV1">
    <div class="sb-img">
    <img src="{{ asset ('frontend/img/blog/blog-2.jpg') }} " alt="">
    </div>
    <div class="sb-text">
    <ul class="sb-meta">
    <li>por<a href="#">admin</a></li>
    <li>10 de enero de 2020</li>
    </ul>
    <a href="{{ route('detalles') }}"><h4>Cómo cocinar el pollo chino picante para el clima frío</h4></a>
    <p>Se puede hacer para una libra más o menos, sal y pimienta. Calentar otra cucharadita de aceite de oliva en una sartén mediana a fuego medio</p>
    <a href="{{ route('detalles') }}" class="read-more-btn-1">Leer más<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="blog-comment-area">
    <div class="sb-comment-area">
    <h4>02 Comentario</h4>
    <div class="single-comment">
    <div class="sc-avatar">
    <img src="{{ asset ('frontend/img/avatar/ca-1.jpg') }} " alt="">
    </div>
    <div class="sc-text">
    <h5>Robison Croso</h5>
    <span>10 nov, 2019</span>
    <p>Si diriges un blog, una revista o un sitio web de portafolio, entonces un diseño de estilo Pinterest
    estilo de diseño, que es un tipo de cuadrícula, es una gran opción para la apariencia de sus páginas web.</p>
    <a href="#" class="btn-style-a-sm">Respuesta</a>
    </div>
    </div>
    <div class="single-comment sc-subcomment">
    <div class="sc-avatar">
    <img src="{{ asset ('frontend/img/avatar/ca-2.jpg') }} " alt="">
    </div>
    <div class="sc-text">
    <h5>Katya Jimmy</h5>
    <span>10 Nov, 2019</span>
    <p>Si tiene un blog, una revista o un sitio web de portafolio, entonces un diseño de estilo Pinterest
            que es un tipo de cuadrícula, es una gran opción para la apariencia de sus páginas web.</p>
    <a href="#" class="btn-style-a-sm">Respuesta</a>
    </div>
    </div>
    </div>
    <div class="sb-comment-form">
    <h4>Deja un comentario</h4>
    <form class="scform">
    <input name="name" type="text" class="g-input" placeholder="Su nombre*">
    <input name="email" type="email" class="g-input" placeholder="Su Correo Electronico*">
    <input name="website" type="text" class="g-input" placeholder="Página web*">
    <textarea class="g-input" placeholder="Comentario*"></textarea>
    <label for="comment-check">
    <input type="checkbox" name="comment-check" id="comment-check">
    Guarda mi nombre, correo electrónico y sitio web en este navegador para la próxima vez que comente.
    </label>
    <input type="submit" class="scf-btn" value="Comentario sobre el puesto">
    </form>
    </div>
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
    <li><a href="#javascript">Cena (5)</a></li>
    <li><a href="#javascript">Comida rápida (4)</a></li>
    <li><a href="#javascript">Brakfast (6)</a></li>
    <li><a href="#javascript">Almuerzo (8)</a></li>
    <li><a href="#javascript">Postre (7)</a></li>
    <li><a href="#javascript">Recetas (5)</a></li>
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
    <h5><a href="#">Cómo cocinar el pollo chino picantePara el frío</a></h5>
    <p>Enero 10, 2020</p>
    </div>
    </div>
    <div class="single-rp">
    <div class="dfpp-img">
    <img src="{{ asset ('frontend/img/blog/rp-2.jpg') }} " alt="">
    </div>
    <div class="dfpp-text">
    <h5><a href="#">Cómo cocinar el pollo chino picantePara el frío</a></h5>
    <p>Enero 10, 2020</p>
    </div>
    </div>
    <div class="single-rp">
    <div class="dfpp-img">
    <img src="{{ asset ('frontend/img/blog/rp-3.jpg') }} " alt="">
    </div>
    <div class="dfpp-text">
    <h5><a href="#">Cómo cocinar el pollo chino picantePara el frío</a></h5>
    <p>Enero 10, 2020</p>
    </div>
    </div>
    </div>
    </div>
    <div class="df-widget df-tags">
    <h4>Etiquetas</h4>
    <ul class="df-tag-list">
    <li><a href="#javascript">delicioso</a></li>
    <li><a href="#javascript">cena</a></li>
    <li><a href="#javascript">desayuno</a></li>
    <li><a href="#javascript">almuerzo</a></li>
    <li><a href="#javascript">comida rápida</a></li>
    <li><a href="#javascript">postre</a></li>
    <li><a href="#javascript">buena comida</a></li>
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