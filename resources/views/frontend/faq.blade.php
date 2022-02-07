@extends('frontend.layouts.app')
@section('title')
    FAQ
@endsection
@section('content')
<section class="breadcrumb-area">
    <img src="{{ asset ('frontend/img/bg/innerpage-breadcrumb-bg-1.jpg') }} "    alt="" class="breadcrumb-bg">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="breadcrumb-box">
    <h3 class="page-title">Faq</h3>
    <ul class="breadcrumb-list">
    <li><a href="{{ route('inicio') }}">Inicio</a></li>
    <li>FAQ</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    
    <section class="faq-area">
    <div class="container">
    <div class="faq-wrapper">
    <div class="row">
    <div class="col-md-12">
    <div class="faq-box">
    
    <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    <div class="row">
    <div class="col-md-6">
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading1">
    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
    <h5>
            ¿Cómo puedo pedir Brakfast? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading2">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
    <h5>
            ¿Puedo seguir mi pedido en el camino? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading3">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
    <h5>
    ¿Cuál es nuestra experiencia? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading4">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
    <h5>
            ¿Cómo puedo pedir hamburguesas? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    </div>
    <div class="col-md-6">
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading5">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
    <h5>
            ¿Quiere pedir nuestra comida? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse5" class="collapse" role="tabpanel" aria-labelledby="heading5" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading6">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
    <h5>
            ¿Cómo puedo hacer mi reserva? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="heading6" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
     </div>
    
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading7">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
    <h5>
            ¿Quieres saber sobre la reserva? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse7" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading8">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
    <h5>
            ¿Cómo puedo cancelar mi cita? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse8" class="collapse" role="tabpanel" aria-labelledby="heading8" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    
    <div class="card">
    
    <div class="card-header" role="tab" id="heading9">
    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
     <h5>
            ¿Cómo nos va con el médico especial? <i class="fa fa-angle-down" aria-hidden="true"></i>
    </h5>
    </a>
    </div>
    
    <div id="collapse9" class="collapse" role="tabpanel" aria-labelledby="heading9" data-parent="#accordionEx">
    <div class="card-body">
    <p>Para iniciar un procedimiento judicial, un abogado presentará un escrito de demanda. Si alguien le entrega uno
            de ellos, no debe ignorarlos. Si lo hace, el acreedor puede solicitar al tribunal una sentencia
            contra usted. </p>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    
    </div>
    </div>
    <div class="col-md-6">
    <div class="faq-question-submit">
    <h4>¿Tiene más preguntas?</h4>
    <div class="contact-box">
    <form class="cform">
    <input type="text" class="df-control" placeholder="Su nombre*">
    <input type="email" class="df-control" placeholder="Su correo electrónico*">
    <input type="text" class="df-control" placeholder="Asunto*">
    <textarea class="df-control" placeholder="Detalles del mensaje*"></textarea>
    <input type="submit" class="bfs-btn" value="Enviar mensaje">
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection