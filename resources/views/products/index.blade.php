@extends('master')
@section('title', 'Products List')

@section('content_header')

    <h2 class="text-center">Bandeja de Productos</h2>
@endsection
@section('content')
    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger espaciado">
            <ul class="sinmargin">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success espaciado">
            {{ session()->get('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Sucursal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->office }}</td>
                    <td>
                        <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                            class="btn btn-info btn-sm">Editar</a>
                        <a href="javascript:enviar_formulario({{ $product->id }})" class="btn btn-danger btn-sm">borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('products.destroy2') }}" method="POST" id="formulario1" name="formulario1">
        @csrf
        @method('DELETE')
        <input type="hidden" value="" id="mi_contacto" name="mi_contacto">
    </form>
    <script>
        function enviar_formulario(mi_producto) {
            var producto = document.getElementById("mi_contacto").value = mi_producto;
            Swal.fire({
                title: '¿Estas seguro de borrar el producto?',
                text: "Esto no se puede revertir",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'Cancelar!',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.formulario1.submit();
                }
            })

        }
    </script>
@endsection
