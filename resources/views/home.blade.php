{{-- @extends('layouts.app') --}}
@extends('master')


@section('title','Dashboard')

@section('content_header')
    <h2 class="text-center">Bienvenido al sistema de inventario</h2>
@endsection
    
@section('content')
<h3>¿Que desea hacer?</h3>

<p>En este sistema podrá realizar:</p>
<ul>
    <li>Registro de productos</li>
    <li>Edición limitada de productos</li>
    <li>Borrado de productos</li>
    <li>Descarga de reportes de los productos </li>
    <li>Crear usuarios nuevos</li>
</ul>
<p>Esto acorde al rol que tenga su perfil, de igual manera dependiendo del perfil que tenga las opciones en la barra lateral cambiaran 
    Gracias por ingresar :)
     </p>
 
@endsection

@section('footer')
    <h3>Uriel Martínez Flores</h3>
@endsection

@section('css')
@endsection

@section('js')
@endsection

{{-- @section('content') --}}
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div-->
{{-- @endsection --}}
