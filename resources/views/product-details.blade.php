@extends('layouts.fronted.product-details')
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
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">JLDM</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/Logojldm.png')}}" alt="JLDM ! Proyects">-->
    </a>
    <div class="menu-toggle" ></div>
    <nav>
        
        <ul>

            <li><a  href="{{ url('/')}}" >INICIO</a></li>
            <li><a  href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
            <li><a href="{{ url('/sobrenosotros')}}">CATEGORIAS</a></li>
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
					    <br>
                        <br>
                        <h1 class="tipeo1">DESCRIPCIÓN:</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<main class="container_product">
    <div class="left-column">
        <img data-image="red" class="active" src="{{asset('/img/productos/'.$producto->image)}}">
    </div>
    <!-- Right Column -->
    <div class="right-column">
    <!-- Product Description -->
    <div class="product-description">
        <span>{{$producto->visible == 1 ? "En Stock":"Agotado"}}</span>
        <h1>{{$producto->name}}</h1>
        <p>{{$producto->extract}}</p>
    </div>

    <!-- Product Configuration -->
    <div class="product-configuration">
        <!-- Cable Configuration -->
        <div class="cable-config">
            <span>Categoría: </span><br>
                <div class="cable-choose">
                    <button>
                        <a href="{{ route('searchCategory' , $producto->categoria->slug)}}">
                            {{$producto->categoria->name}}
                        </a>
                    </button>
                </div>
        </div>
    </div>

    <!-- Product Pricing -->
    <div class="product-price">
        <span>S/{{$producto->price}}</span>
            <a target="none" href="https://wa.me/51987456321?text=Hola+interesad%40+en+el+Producto%3A+{{$producto->name}}" class="cart-btn">
            Consultar
            </a>
    </div>
  </div>
</main><br><br>
<div class="container">
<div class="media">
    <img width="100" height="100"  src="{{asset('/img/productos/'.$producto->image)}}" class="align-self-start mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0">Descripción:</h5>
      <p>{{$producto->descriptions}}</p>
    </div>
  </div>
</div>
@endsection

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
