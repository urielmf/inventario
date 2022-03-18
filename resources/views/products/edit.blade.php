@extends('master')


@section('title', 'Productos')

@section('content_header')
<h2 class="text-center mt-3">Editar producto</h2>
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
                <form method="POST" action="{{ route('products.update',['product'=>$product->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="{{ old('name') ?? $product->name}}" placeholder="Nombre" readonly>
                    </div>
                    <div class="form-group">
                        <textarea readonly class="form-control" type="text" name="description" placeholder="Descripción" required style="height: 150px">{{old('description') ?? $product->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <select disabled name="category_id" id="" class="form-control" required>
                            <option value="">Selecciona categoría</option>
                            @foreach ($categories as $category)
                            <option {{$category->id == $product->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select disabled name="office_id" id="" class="form-control" required>
                            <option value="">Selecciona sucursal</option>
                            @foreach ($offices as $office)
                            <option {{$office->id == $product->office_id ? 'selected' : ''}} value="{{$office->id}}">{{$office->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input readonly class="form-control" type="number" min="1.00" step="0.01" name="price"
                            value="{{ old('price') ?? $product->price }}" placeholder="Precio" required>
                    </div>
                    <div class="form-group">
                        <label> Fecha de compra</label>
                        <input readonly class="form-control" type="date" min="0" name="date_p" value="{{ old('date_p->format("Y-m-d"') ?? $product->date_p->format('Y-m-d')}}" required>
                    </div>
                    <div class="form-group">
                        <select name="state" class="form-control" required>
                            <option value="">Selecciona Estado</option>
                            <option {{$product->state == 1 ? 'selected' : ''}} value="1">Abierto</option>
                            <option {{$product->state == 0 ? 'selected' : ''}} value="0">Cerrado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="text" name="comments" placeholder="Comentarios del gestor" required style="height: 150px">{{old('comments') ?? $product->comments}}</textarea>
                    </div>
                    <br>
                    <div class="form-row">
                        <p><button type="submit" class="btn btn-primary btn-lg">Editar Producto</button></p>
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
