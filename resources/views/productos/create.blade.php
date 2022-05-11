@extends('layouts.principal')

@section('contenido')
<div class="row">
  <h1 class="blue-grey-text">Nuevo producto</h1>
</div>

<div class="row">
    <form method="POST"
          action="{{ url('productos') }}"
          class="col s12">
      @csrf
      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Nombre de producto" 
                  id="nombre" 
                  type="text" 
                  class="validate" 
                  name="nombre">
          <label for="nombre">Nombre de producto</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s8">
          <textarea class="materialize-textarea"
                    id="descripcion"
                    name="desc">

          </textarea>
          <label for="desc">Descripción</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s8">
          <input id="precio" 
                 name="precio" 
                 type="text" 
                 class="validate">
          <label for="precio">Precio</label>
        </div>
      </div>

      <div class="row">
        <div class="file-field input-field col s8">
          <div class="btn">
            <span>Imagen de Producto...</span>
            <input type="file" name="imagen">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s8">
          <select name="categoria">
            <option value="" disabled selected>Elija Categoria</option>
            @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">
                {{ $categoria->nombre }}
              </option>
            @endforeach
          </select>
          <label>Categorías Disponibles</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s8">
          <select name="marca">
            <option value="" disabled selected>Elija Marca</option>
            @foreach($marcas as $marca)
              <option value="{{ $marca->id }}">
                {{ $marca->nombre }}
              </option>
            @endforeach
          </select>
          <label>Marcas Disponibles</label>
        </div>
      </div>

      <div class="row">
        <button class="btn waves-effect waves-light" 
                type="submit" 
                >
                Guardar
        </button>
      </div>

    </form>
  </div>
  @endsection