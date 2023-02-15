<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Foto, Galeria!</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">

    <!-- Materialize.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

    <style>
    body {
        background-image: url("https://s3.amazonaws.com/businessinsider.mx/wp-content/uploads/2020/06/30182348/jay-wennington-loAgTdeDcIU-unsplash-1-1280x620.jpg");
        background-size: 100% 100%;
        background-attachment: fixed;
    }

    .menu {
        list-style: none;
        padding: 0;
        background: dodgerblue;
        width: 70%;
        max-width: 10000px;
        margin: auto;
        border-radius: 10px;
        position: relative;
        left: 50px;
        top: 50px;
    }

    .menu li a {
        text-decoration: none;
        color: white;
        padding: 20px;
        display: block;
        border-radius: 1000px;
    }

    .menu li {
        display: inline-block;
        text-align: center;
    }

    .menu li a:hover {
        background: deepskyblue;
    }

    .b {
        color: white;
        font-size: 30px;
        font-weight: bold;

    }

    h4 {
        text-align: center;
        color: white;
        font-weight: bold;

    }

    h1 {
        text-align: center;
        color: white;
        font-weight: bold;

    }


    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .titulo {
        font-size: 40px;
        font-family: 'Dancing Script', cursive;
        margin-bottom: 40px;
        color: #fff;
    }

    .subtitulo {
        margin: 0;
        color: darkblue;
        display: inline;
        font-size: 50px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .sabor {
        color: #fff;
        margin: 7px 0;
        font-size: 50px;
        font-weight: 600;
        text-shadow: 2px 2px 1px rgba(0, 0, 0, 0.7);
        font-family: 'Dancing Script', cursive;
        margin-top: 0;
    }

    .linea-division {
        width: 80%;
        height: 2px;
        background-color: #36221c;
    }

    /* ------------------------- */
    /* Estilos de Materialize */
    /* ------------------------- */
    .carousel {
        min-height: 500px;
    }

    .carousel .carousel-item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        user-select: none;
        width: 500px;
        height: 500px;
    }

    .carousel .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        border-radius: 15px;
    }

    .carousel .indicators .indicator-item {
        border-radius: 0;
        transform: rotate(45deg);
        margin: 0 15px;
        background: darkcyan;
    }


    /* footer */

    footer {
        background: #414141;
        padding: 60px 0 30px 0;
        margin: auto;
        overflow: hidden;
    }

    .contenedor-footer {
        display: flex;
        width: 90%;
        justify-content: space-evenly;
        margin: auto;
        padding-bottom: 50px;
        border-bottom: 1px solid #ccc;
    }

    .content-foo {
        text-align: center;
    }

    .content-foo h4 {
        color: #fff;
        border-bottom: 3px solid #af20d3;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }

    .content-foo p {
        color: #ccc;
    }

    .titulo-final {
        text-align: center;
        font-size: 24px;
        margin: 20px 0 0 0;
        color: #9e9797;
    }

    @media screen and (max-width:900px) {
        header {
            background-position: center;
        }

        .contenedor-sobre-nosotros {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sobre-nosotros .contenido-textos {
            width: 90%;
        }

        .imagen-about-us {
            width: 90%;
        }

    }

    @media screen and (max-width:500px) {
        nav {
            text-align: center;
            padding: 30px 0 0 0;
        }

        nav>a {
            margin-right: 5px;
        }

        .textos-header h1 {
            font-size: 35px;
        }

        .textos-header h2 {
            font-size: 20px;
        }

        /* Footer */

        .contenedor-footer {
            flex-direction: column;
            border: none;
        }

        .content-foo {
            margin-bottom: 20px;
            text-align: center;
        }

        .content-foo h4 {
            border: none;
        }

        .content-foo p {
            color: #ccc;
            border-bottom: 1px solid #f2f2f2;
            padding-bottom: 20px;
        }

        .titulo-final {
            font-size: 20px;
        }
    }
    </style>

    <ul class="menu" style="text-align: center">
        <li class="b"> <br> </li>
        <li><a href="{{ url('/')}}">INICIO</a></li>
        <li><a href="{{ url('/contact')}}">CONTACTENOS</a></li>
        <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
        <li><a class="active" href="{{ url('/foto_galeria')}}">FOTO GALERÍA</a></li>
        <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
    </ul>
    <br><br><br>

    <h4>GOBIERNO PARROQUIAL ZAMBIZA</h4>


    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="center-align titulo">FOTOS DE GALERÍAS</h1>
            </div>

            <div class="carousel center-align">
                <div class="carousel-item">
                    <h2 class="subtitulo">Naturaleza</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_13-rotated-800x1204.jpg"
                        width="400" alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Cultura</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_09-rotated-800x1204.jpg"
                        width="400" alt="">
                </div>


                <div class="carousel-item">
                    <h2 class="subtitulo">Vacacionales</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/20220801_110119-scaled-800x360.jpg"
                        alt="">
                </div>


                <div class="carousel-item">
                    <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_07-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Eventos</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/IMG-20200211-WA0037-800x450.jpg"
                        width="400" alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Naturaleza</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_11-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Vacacionales</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/20220801_115155-scaled-800x360.jpg"
                        width="400" alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_08-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Vacacionales</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/20220801_111411-scaled-800x360.jpg"
                        width="400" alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_06-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Vacacionales</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_10-800x531.jpg" width="400"
                        alt="">
                </div>


                <div class="carousel-item">
                    <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_03-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Cultura</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_02-rotated-800x1204.jpg"
                        width="400" alt="">
                </div>


                <div class="carousel-item">
                    <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_05-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Cultura</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_12-800x640.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_01-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Fiestas</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/03/zam_04-800x531.jpg" width="400"
                        alt="">
                </div>

                <div class="carousel-item">
                    <h2 class="subtitulo">Obras</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Zambiza</p>
                    <img src="https://www.gadzambiza.gob.ec/wp-content/uploads/2022/08/WhatsApp-Image-2022-08-05-at-9.04.12-AM-800x449.jpeg"
                        width="400" alt="">
                </div>




            </div>
        </div>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const elementosCarousel = document.querySelectorAll('.carousel');
        M.Carousel.init(elementosCarousel, {
            duration: 150,
            dist: -80,
            shift: 5,
            padding: 5,
            numVisible: 3,
            indicators: true,
            noWrap: false
        });
    });
    </script>



    <!-- Materialize.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Celular</h4>
                <p>0989037997</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>zambiza@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ubicacion</h4>
                <p>Jorge Salvador y Osvaldo Urtado</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; © 2022 Todos los derechos reservados por | GAD Zambiza.</h2>
    </footer>


</body>

</html>