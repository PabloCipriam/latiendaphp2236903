@extends('layouts.principal')

@section('contenido')

<div class="row">
    <h1>{{ $producto -> nombre }}</h1>
</div>
<div class="row">
    <div class="col s8">
        <div class="row">
            <div class="col s8">
            <img src="{{ asset('img/'.$producto->imagen) }}">
            </div>
        </div>
        <div class="row">
            <div class="col s8">
                <ul>
                    <li><h5><strong>Marca:</strong> {{ $producto->marca->nombre }}</h5> </li>
                    <li><h5><strong>Categoria:</strong> {{ $producto->categoria->nombre }}</h5> </li>
                    <li><h5><strong>Precio:</strong> {{ $producto->precio }}</h5> </li>
                    <li><h6><strong>Descripción:</strong> {{ $producto->desc }}</h6> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col s4">
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <div class="row">
                <h3>Añadir al carrito</h3>
            </div>
            <input type="hidden" name="prod_id" value="{{ $producto -> id }}">
            <div class="row">
                <div class="col s4 input-field">
                    <select name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                    </select>
                    <label for="Cantidad">Cantidad:</label>
                </div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light" 
                        type="submit">
                        Añadir
                </button>
            </div>
        </form>
    </div>
</div>
@endsection