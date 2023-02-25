@extends('layouts.fronted.categorias')
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
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
    <nav>
        <ul>

            <li><a  href="{{ url('/')}}" >INICIO</a></li>
            <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
            <li><a href="{{ url('/sobrenosotros')}}">CATEGORIAS</a></li>
            <li><a class="active" href="{{ url('/productos')}}">PRODUCTOS</a></li>
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
					    <br><br>
                        <h1 class="tipeo1">VARIEDAD DE PRODUCTOS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('products')
<div class="main">
    <br><h1 class="title_category">Escoja una de nuestras categorías</h1><br/>
    <hr class="style4">
    <ul class="cards">
        @foreach($categorias as $categoria)
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img  src="{{ asset('img/1pc.jpg')}}" height="100"></div>
          <div class="card_content">
            <h1 class="card_title">{{$categoria->name}}</h1>
            <hr>
            <p class="card_text">{{$categoria->descripcion}}</p>
            <a class="btn card_btn" href="{{ route('searchCategory' , $categoria->slug)}}">
                Productos
            </a>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
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
  