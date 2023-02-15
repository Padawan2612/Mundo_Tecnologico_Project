@extends('layouts.fronted.nosotros')
@section('redes')
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                2886 280 / 0998757288
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                jldm605@gmail.com
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño"></h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/Logo_jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a  href="{{ url('/')}}" >INICIO</a></li>
                <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/sobrenosotros')}}">EQUIPO DE TRABAJO</a></li>
                <li><a  href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a  href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a class="active" href="{{ url('/foto_galeria')}}">FOTO GALERÍA</a></li>
                <li><a href="{{ url('/login')}}">INICIAR SESION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4>GOBIERNO <span>PARROQUIAL</span></h4>
						<br>
						<br>
                        <h1 class="tipeo1">COMUNÍCATE CON NOSOTROS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="¿Nuestra Misión?">
            <i class="fas fa-5x fa-question"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Nuestra Misión?</h3>
                <p>En el 2019, la parroquia de Zámbiza es unida, con límites definidos, segura, saludable donde los ciudadanos acceden en igualdad de condiciones a los servicios básicos (energía, agua, saneamiento, salud, educación, tecnología) y a espacios verdes para la recreación.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Objetivos Estrategicos?">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Objetivos Estrategicos</h3>
                <p>
                    Conservar de manera técnica
                    
                    los ecosistemas naturales, través de campañas de educación y protección ambiental, conservando la biodiversidad, quebradas y fuentes de agua, evitando la expansión urbana con todos sus problemas (plagas, basura, animales domésticos introducidos entre otros). Mediante la gestión con los gobiernos municipales, provinciales y central.
                    .</p>
                
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Objetivos Estrategicos?">
            <i class="fas fa-5x fa-chart-bar"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Objetivos Estrategicos</h3>
                <p>Recuperar y fortalecer
                    
                    la pertenencia cultural, a través de mejoras en los servicios de salud, educación, vivienda, vialidad, alumbrado público y seguridad de la población al igual que los espacios públicos de recreación y convivencia intercultural mediante actividades propias de parroquia, esto mediante la articulación con los otros gobiernos seccionales
                    .
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Objetivos Estrategicos?">
            <i class="fas fa-5x fa-money-bill-wave"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Objetivos Estrategicos?</h3>
                <p>
                    Propiciar actividades y acciones
                    
                    concretas creando oportunidades laborales locales para el desarrollo productivo agrícola, turístico y comercial, garantizando los medios de producción (crédito, riego, suelo, centros de acopio, espacios para la comercialización) de manera sostenible para mejorar la calidad de vida de la población
                    . 
                </p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('clientes')
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($clientes as $cliente)
            <div class="swiper-slide">
                <img class="client_img text-center"src="{{asset('/img/clientes/'.$cliente->image)}}" alt="{{$cliente->image}}" class="card-img-top">
            </div>
            @endforeach  
        </div>
    </div>   
@endsection 
@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/JLDIAZ.png')}}" alt="JLDM | Proyectos">-->
        <h2 style="color: white" class="footer_img">Zámbiza</h2>
    <p>Es unida, con límites definidos, segura, saludable donde los ciudadanos acceden en igualdad de condiciones a los servicios básicos (energía, agua, saneamiento, salud, educación, tecnología) y a espacios verdes para la recreación.
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="https://www.gadzambiza.gob.ec/" target="_blank">©GADZAMBIZA-2022</a></p>
        </div>
</footer>
@endsection
@section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CLIENTES </h5>
            <h3>QUE CONFÍAN EN NOSOTROS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>MÁS ACERCA DE NOSOTROS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection