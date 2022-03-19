@extends('master')
@section('content_header')
    <h2 class="text-center">Reportes</h2>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <div class="background p-4" style="background-color: #ffffff; border-radius:7px">
                    <h3 class="mt-4">Descarga masiva de productos</h3>
                    <a class="btn btn-success mt-3 mb-3 text-center" href="{{ route('reports.export') }}">
                        Exportar
                    </a>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="background p-4" style="background-color: #ffffff; border-radius:7px">
                    <h3 class="mt-4">Descarga de productos por fecha</h3>
                    <a class="btn btn-success mt-3 mb-3 text-center" href="{{ route('reports.export.dates',['office'=>2]) }}">
                        Exportar
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
