<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
    <script src="https://kit.fontawesome.com/8548a26bb3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>

    <header class="header">
        <a href="#" class="logo">3Xterior</a>

        <nav class="navbar">
            <a href="{{route('Main')}}">Inicio</a>
            <a href="#galeria">Galeria</a>
            <a href="#">Ofertas</a>
            <a href="#contacto">Contacto</a>
            <a href="{{route('carrito')}}"><i class="fa fa-shopping-cart"></i>
                @if ($carrito === null)
                0
                @else
                {{ count($carrito) }}
                @endif
            </a>
        </nav>
    </header>

    <div class="content">
        <section id="welcome" class="welcome">
        <h1>VIVE TU AVENTURA</h1>
        <p> Compra los mejores accesorios para tu salida a la naturaleza <br> disfruta de tus viajes como nunca antes </p>
        <div>
            <button type="button">Visita la Tienda</button>
            <button type="button">Subscribete</button>
        </div>
        </section>

        <div class="ofertas" id="galeria">
            <h1>Ofertas especiales</h1>
            <p>No te pierdasa estas increibles ofertas, aprovecha</p>

            <div class="row">
                <div class="oferta-col">
                    <img src="{{ asset('img/tienda 1.jpg') }}" alt="Caña de pescar" width="200" height="200">
                    <h3>Caña de pescar</h3>
                    <p>$precio <br> modelo v-234</p>
                    <a href="#">Agregar al carrito</a>
                </div>
                <div class="oferta-col">
                    <img src="{{ asset('img/tienda3.jpg') }}" alt="Tienda de acampar" width="200" height="200">
                    <h3>Tienda de acampar</h3>
                    <p>$precio <br> Modelo 34-234</p>
                    <a href="#">Agregar al carrito</a>
                </div>
                <div class="oferta-col">
                    <img src="{{ asset('img/tienda4.jpg') }}" alt="Fogata portatil" width="200" height="200">
                    <h3>Fogata portatil</h3>
                    <p>$precio <br> madera y aceite para fogata</p>
                    <a href="#">Agregar al carrito</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="wrapper">
                <div class="wrapper-holder">
                    @php
                        $n = 1;
                    @endphp
                    @foreach ($productos as $producto)
                    <a href="{{ route('carrito.compra', $producto->id) }}" >
                    <img id="slider-img-{{$n}}" src="{{ asset($producto->imagen_referencia) }}" alt="{{$producto->descripcion}}">
                    </a>
                    @php
                        $n = $n + 1;
                    @endphp
                    @endforeach
                </div>
            </div>
            @php
                $n = 1;
            @endphp
            <div class="button-holder">
                @foreach ($productos as $producto)
                <a href="./#slider-img-{{$n}}" class="button"></a>

                @php
                    $n = $n + 1;
                @endphp
                @endforeach
            </div>
        </div>
    </div>

    <footer>
        <div class="foot" id="contacto">
            <div class="footer-content">
                <h3>Contactanos</h3>
                <p>Email:info@emailexample.com</p>
                <p>Telefono: +58 457 1647978</p>
                <p>Direccion: Av. caracas, calle 123</p>
            </div>
            <div class="footer-content">
                <h3>Menu</h3>
                <ul class="list">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Galeria</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Siguenos</h3>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2024 3Xterior compañia anonima. Todos los derechos reservados</p>
        </div>
    </footer>

</body>
</html>
