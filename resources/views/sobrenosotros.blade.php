@extends('layouts.fronted.sobrenosotros')
@section('redesdos')
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
        <!--<img  class="imgtamaño" src="{{ asset('img/Logo_jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
    <nav>
            <ul>
                <li><a  href="{{ url('/')}}" >INICIO</a></li>
                <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a class="active" href="{{ url('/sobrenosotros')}}">CATEGORIAS</a></li>
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
                        <h4>MUNDO <span>TECNOLOGICO</span></h4>
                        <h1 class="tipeo1">NUESTROS DIFERENTES PRODUCTOS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
<div class="col-12">
		<div class="testimonial-title">
            <br>
            <br>
            <br>
            <h3>CONOCE ACERCA DE NUESTROS PRODCUTOS MAS DEMANDADOS EN EL MERCADO</h3><br>
            <hr class="style1">

	    </div>
</div>
@endsection

@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="CASE">
            <img src="img/presidente.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
                <h3>COMPUTADORAS</h3>
                <p>
                        NUESTRO PRODUCTO MAS VENDIDO <br>
                    -COMBO RYZEN 5 5600G <br>
                    -16 GB RAM <br>
                    -512 GB SSD <br>
                    -600W <br>

                    Tarjeta de video Gigabyte 6gb GTX1660
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
    <div class="nosotros_imbBx"  data-text="rams">
            <img src="img/vicepresidente.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
                <h3>MEMORIAS RAMS</h3>
                <p>
                   NUESTRO PRODUCTO MAS VENDIDO <br>
                32GB (2 x 16GB) Capacity <br>
                5200 MHz Clock Speed <br>
                PC5-41600 <br>
                288-Pin UDIMM <br>
                1.35V <br>
                Support for XMP 3.0 <br>
                RGB Lighting<br>
                </p>

            </div>
        </div>
    </div>

    <div class="nosotros_card">
    <div class="nosotros_imbBx"  data-text="PERIFERICO">
            <img src="img/vocal1.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
                <h3></h3>
            <h3>PERIFERICO(TECLADO)</h3>
                <p>
                                    NUESTRO PRODUCTO MAS VENDIDO <br>
                   Teclado para juegos, retroiluminado por LED arcoíris de 9 colores, <br>
                    107 teclas, teclado con iluminación silenciosa y teclas multimedia.
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
    <div class="nosotros_imbBx"  data-text="MONITOR">
            <img src="img/vocal2.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
            <h3>MONITOR</h3>
                <p>
                                    NUESTRO PRODUCTO MAS VENDIDO <br>
27 "
Resolución de la pantalla
1080p
Frecuencia de actualización recomendada
140 Hz
Frecuencia máxima de actualización
165 Hz
Tipo de resolución
Full HD
Tipo de pantalla
LED
                </p>
            </div>
        </div>
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
