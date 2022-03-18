@extends('adminlte::page')


@section('title', 'Productos')

@section('content_header')
<h2 class="text-center mt-3">Registrar un producto</h2>
@endsection

@section('content')
@if (isset($errors) && $errors->any())
        <div class="alert alert-danger espaciado">
            <ul class="sinmargin">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>  
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-6">

                <form method="POST" action="{{ route('products.store') }}">
                    @csrf

                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="text" name="description" value="{{ old('description') }}"
                            placeholder="Descripción" required style="height: 150px"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="category_id" id="" class="form-control" required>
                            <option value="">Selecciona categoría</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="office_id" id="" class="form-control" required>
                            <option value="">Selecciona sucursal</option>
                            @foreach ($offices as $office)
                            <option value="{{$office->id}}">{{$office->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" min="1.00" step="0.01" name="price"
                            value="{{ old('price') }}" placeholder="Precio" required>
                    </div>
                    <div class="form-group">
                        <label> Fecha de compra</label>
                        <input class="form-control" type="date" min="0" name="date_p" value="{{ old('date_p->format("Y-m-d"') }}" required>
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
