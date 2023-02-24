@extends('layouts.fronted.contact')
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

        </div>
    </div>
</div>
@endsection

@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño"></h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a  href="{{ url('/')}}" >INICIO</a></li>
                <li><a class="active" href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/sobrenosotros')}}">EQUIPO DE TRABAJO</a></li>
                <li><a  href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a  href="{{ url('/nosotros')}}">NOSOTROS</a></li>

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


@section('Content_messege')
<div class="conatiner">
    <div class="form">
        <div class="contact-info">
                <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3>
                <p class="contact_text">Un punto estratégico para una mejor atención a
                    nuestros clientes para que puedan realizar su compra o
                    recoger sus productos.
                </p>

            <div class="contactos_info">
                <div class="contact_information">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                    <p>Guayaquil OE3-101 y Bolívar, 2do Piso</p>
                </div>
                <div class="contact_information">
                <i class="fas fa-2x fa-phone-volume"></i>
                <p>0969651205/ 0968614467</p>
                </div>
                <div class="contact_information">
                    <i class="far fa-2x fa-envelope"></i>
                    <p>mundotec2023@gmail.com</p>
                </div>
            </div>
            <div class="social_media">
                <p>REDES SOCIALES</p>
                <div class="social-icons">
                    <a href="  target="none">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://chat.whatsapp.com/ILGPFwbdlCdBCEkP9a4G4r"  target="none">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>
            </div>
        </div>
        <div class="contact-form">
            <form action="" autocomplete="off">
                <h3 class="contact_tittle">HORARIOS DE ATENCIÓN.</h3> <br>
                    <h2 class="contact_tittle">Lunes/Viernes 9:00AM-6:00PM </h2> <br>
                    <h2 class="contact_tittle"> Sábados 9:30 AM - 1:30 PM </h2>

            </form>
        </div>
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
