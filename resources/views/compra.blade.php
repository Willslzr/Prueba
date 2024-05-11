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
            <a href="#">Galeria</a>
            <a href="#">Ofertas</a>
            <a href="#">Contacto</a>
            <a href="{{route('carrito')}}"><i class="fa fa-shopping-cart"></i>
                @if ($carrito === null)
                0
                @else
                {{ count($carrito) }}
                @endif
            </a>
        </nav>
    </header>
    {{-- @dd($producto) --}}
    <form action="{{route('carrito.actualizar')}}" method="POST">
        @csrf
        <div class="producto-en-carrito">
            <div class="producto-imagen">
                <img src="{{ asset($producto->imagen_referencia) }}" alt="{{ $producto->descripcion }}" width="400">
            </div>
            <div class="producto-detalles">
                <p class="producto-nombre">{{ $producto->nombre }}</p>
                <p class="producto-descripcion">{{ $producto->descripcion }}</p>
                <p class="producto-stock">En stock: {{ $producto->cantidad_stock }}</p>
            </div>
            <div class="producto-cantidad">
                <label for="cantidad-{{$producto->id}}">Cantidad:</label>
                <input type="number" id="cantidad-{{$producto->id}}" name="cantidad" min="1" max="{{ $producto->cantidad_stock }}" value="1">
            </div>
            <div class="producto-acciones">
                <button type="button">Cancelar</button>
                <button type="submit">Agregar al Carrito</button>
            </div>

            <input type="hidden" name="id" value="{{ $producto->id }}">
            <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
            <input type="hidden" name="imagen_referencia" value="{{ $producto->imagen_referencia }}">
        </div>
    </form>

    <footer>
        <div class="foot">
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
