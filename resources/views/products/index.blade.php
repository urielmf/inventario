@extends('adminlte::page')


@section('title', 'Productos')

@section('content_header')
<h2 class="text-center mt-3">Registrar un producto</h2>
@endsection

@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-6">

                <form method="POST" action="{{ route('products.store') }}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="text" name="description" value="{{ old('description') }}"
                            placeholder="Descripción" required style="height: 150px"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="category" id="" class="form-control" required>
                            <option value="">Selecciona categoría</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="office" id="" class="form-control" required>
                            <option value="">Selecciona sucursal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" min="1.00" step="0.01" name="price"
                            value="{{ old('price') }}" placeholder="Precio" required>
                    </div>
                    <div class="form-group">
                        <label> Fecha de compra</label>
                        <input class="form-control" type="date" min="0" name="fecha_compra" value="{{ old('fecha_compra') }}" placeholder="Fecha de compra"
                            required>
                    </div>
                    
                    <br>
                    <div class="form-row">
                        <p><button type="submit" class="btn btn-primary btn-lg">Registrar</button></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <h3>Uriel Martínez Flores</h3>
@endsection

@section('css')
@endsection

@section('js')
@endsection
