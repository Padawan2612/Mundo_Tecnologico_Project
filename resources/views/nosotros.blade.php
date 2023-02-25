@extends('layouts.fronted.nosotros')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none" class="fab fa-instagram"></a>
    </div>

    <div id="whatsaap">
        <a href="https://www.facebook.com/profile.php?id=100064519253506" target="none" class="fab fa-whatsapp"></a>
    </div>

</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
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
            <li><a href="{{ url('/sobrenosotros')}}">CATEGORIAS </a></li>
            <li><a  href="{{ url('/productos')}}">PRODUCTOS</a></li>
            <li><a class="active" href="{{ url('/nosotros')}}">NOSOTROS</a></li>
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
                        <h4>MUNDO-<span>TECNOLOGICO</span></h4>
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
                <h3>Nuestra Misión</h3>
                <p>Es proporcionar a nuestros clientes los mejores accesorios para mejorar y proteger su experiencia de uso de la computadora.Además, nos enfocamos en mantenernos actualizados sobre las últimas tendencias tecnológicas para ofrecer los productos más innovadores a nuestros clientes. 
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Nuestra Visión?">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>Nuestra Visión</h3>
                <p>
                    En nuestra tienda de accesorios para computadora, nos esforzamos por convertirnos en líderes en la industria de los accesorios para computadoras. Nos enfocamos en mantenernos al día con las últimas tendencias y tecnologías, para ofrecer a nuestros clientes los productos más innovadores y de alta calidad.
                    </p>

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
                <p>Ampliar la variedad de productos: Ofrecer una amplia gama de productos para atender a las necesidades de los clientes, incluyendo accesorios para computadoras, periféricos, dispositivos de almacenamiento y productos de limpieza.
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
                <h3>Objetivos Estrategicos</h3>
                <p>
                    Ofrecer precios competitivos: Establecer una política de precios atractivos y competitivos para ganar la preferencia de los clientes.
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
            <h2 style="color: white" class="footer_img">MUNDO TECNOLOGICO</h2>
        <p>Somos una compañía apasionada en lo que hacemos: brindar una excelente atención al cliente, asesoría
            de primera y venta de productos informáticos de altísima calidad.
        </p>
        </div>
            <ul class="r-footer">
                <li>
                <h2>Nuestras redes sociales</h2>
                    <ul class="box">
                        <li class="button_social">
                            <i class="fab mr-2 fa-facebook"></i>
                            <a href="" target="_blank">Facebook</a>
                        </li>
    
                        <li class="button_social">
                            <i class="fab mr-2 fa-whatsapp"></i>
                            <a href="https://chat.whatsapp.com/ILGPFwbdlCdBCEkP9a4G4r" target="_blank">Whatsapp</a>
                        </li>
    
    
                    </ul>
                </li>
    
                <li class="features">
                    <h2>Procedimiento de Pagos</h2>
                    <ul class="box">
                        <li><a type="button" class="btn btn-outline-info"  data-toggle="modal" data-target=".bd-example-modal-xl" href="#">Ver mas</a></li>
                    </ul>
                    </li>
            </ul>
            <div class="b-footer">
                <p>Todos los Derechos reservados by <a href="" target="_blank">© 2023 MundoTecnologico.</a></p>
            </div>
    </footer>
    @endsection
    