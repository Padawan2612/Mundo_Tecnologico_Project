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
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                2886 280 / 0998757288
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                gadzambiza@hotmail.com
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
                <li><a class="active" href="{{ url('/sobrenosotros')}}">EQUIPO DE TRABAJO</a></li>
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
                        <h4>GOBIERNO <span>PARROQUIAL</span></h4>
                        <h1 class="tipeo1">SOBRE NOSOTROS</h1>
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
            <h3>CONOCE MÁS ACERCA DE NUETRO EQUIPO DE TRABAJO</h3><br>
            <hr class="style1">

	    </div>
</div>
@endsection

@section('foda')
<div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="PRESIDENTE">
            <img src="img/presidente.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
                <h3>PRESIDENTE</h3>
                <p>
                                    BIOGRAFÍA
                    Nombre completos: Celio Reinaldo Arias Pilaguano
                    Nacionalidad: Ecuatoriana
                    Edad: 61 años
                    PRIMARIA
                    Unidad Educativa «Pedro Luis Calero» Zámbiza
                    SECUNDARIA
                    Colegio Unión Nacional De Periodistas (UNP)
                    NIVEL SUPERIOR
                    Universidad Central Del Ecuador Profesión Psicólogo
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
    <div class="nosotros_imbBx"  data-text="VICEPRESIDENTE">
            <img src="img/vicepresidente.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
                <h3>VICEPRESIDENTE</h3>
                <p>
                                BIOGRAFÍA
                Nombres y Apellidos:Hipolito Javier Lluno Carrera
                Numero de cedula: 170395619-1
                Tipo de sangre: A+
                Profesión: Abogado de los tribunales de justicia y procesal civil
                Registro profesional 6495 C. A. P. – 17-2002
                Representante: Comisión de seguridad.
                Domicilio: Zambiza, cantón Quito, provincia de Pichincha
                Teléfonos: 2886296 – 0995031650 – O987011901
                </p>

            </div>
        </div>
    </div>

    <div class="nosotros_card">
    <div class="nosotros_imbBx"  data-text="VOCAL GADPR">
            <img src="img/vocal1.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
                <h3>VOCAL GADPR</h3>
                <p>
                                    BIOGRAFÍA
                    Lic. en Ciencias de la Educación
                    mención “Físico- Matemático” en la Universidad Técnica Particular de Loja.
                    Ejerció como docente del Colegio Particular “Fernando Ortiz Crespo”
                    Vocal a cargo de la comisión de Educación,
                    Cultura y Producción en la administración 2014-2019
                    Actualmente Vocal a cargo de la comisión de Salud, Educación.

                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
    <div class="nosotros_imbBx"  data-text="VOCAL SEGUNDO GADPR">
            <img src="img/vocal2.jpg" alt="" width="100%" heigth="100%">
        </div>
        <div class="nosotros_content">
            <div>
            <h3>VOCAL SEGUNDO GADPR</h3>
                <p>
                                    CARGO ACTUAL
                    Vocal Principal GAD Parroquial de Zámbiza.
                    COMISIONES A CARGO: Medio Ambiente, Cultura y Producción.
                    Durante 15 años desempeño en QUITO MOTORS S.A.C.I (Ford Motor Company).
                    Inicio su carrera dirigencial como presidente del Barrio San Miguel de Cocotog.
                    Entre los logros obtenidos es trabajar en conjunto con la comunidad para mejorar.
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
            <p>Todos los Derechos reservados by <a href="https://josediazmirano.github.io/jldiaz/" target="_blank">©GADZAMBIZA-2022</a></p>
        </div>
</footer>
@endsection
