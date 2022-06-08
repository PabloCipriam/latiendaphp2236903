@extends('layouts.principal')

@section('contenido')

    <div class="row">
        <h1 class="amber-text text-darken-2">Catálogo de productos</h1>
    </div>
    @if(session('mensajito'))
        <div class="row">
            <p>
                {{ session('mensajito') }} 
                <a href="{{ route('cart.index') }}">
                    Ir al carrito
                </a> 
            </p>
        </div>
    @endif
    @foreach($productos as $producto)
    <div class="row">
        <div class="col s5">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator responsive-img" src="{{ asset('img/'.$producto->imagen) }}">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><h4>{{ $producto->nombre }}</h4><i class="material-icons right">more_vert</i></span>
                    <h5>${{ $producto->precio }}</h5>
                    <p><a href="{{ route('productos.show', $producto->id) }}">Ver detalles</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">{{ $producto->nombre }}<i class="material-icons right">close</i></span>
                    <p>{{ $producto->desc }}</p>
                </div>
            </div>
        </div>
    </div>
  

    @endforeach
    
@endsection