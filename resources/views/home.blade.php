{{-- @extends('layouts.app') --}}
@extends('adminlte::page')


@section('title','Dashboard')

@section('content_header')
    
@endsection
    
@section('content')

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
