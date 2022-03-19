@extends('master')
@section('content_header')
    <h2 class="text-center">Reportes</h2>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 text-center" style="height: 100%">
                <div class="background p-4" style="background-color: #ffffff; border-radius:7px; height: 238px;">
                    <h3 class="mt-4">Descarga masiva de productos</h3>
                    <a class="btn btn-success mt-3 mb-3 text-center" href="{{ route('reports.export') }}">
                        Exportar
                    </a>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="background p-4" style="background-color: #ffffff; border-radius:7px">
                    <h3 class="mt-4">Descarga de productos por fecha</h3>
                    <form action="{{route('reports.exportdate')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group text-left">
                                    <label for="">Fecha Inicial</label>
                                    <input type="date" name="date1" class="form-control" id="date1" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group text-left">
                                    <label for="">Fecha Final</label>
                                    <input type="date" name="date2" class="form-control" id="date1" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Exportar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
