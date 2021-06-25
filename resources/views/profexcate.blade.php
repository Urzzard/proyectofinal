@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #87E8B1; font-weight: bold;">{{ __('PERFIL DEL PROFESIONAL') }}</div>
                
                @foreach ($categoria as $cate)
                        
                <hgroup class="container">
                    <p><strong> Profesional de {{$cate["categoria"]}}</strong></p>
                    {{--<a style="font-size: 25px" href="ver-perfil-profe">{{$profe["name"]}}</a>--}}
                    <a style="font-size: 25px;" href="{{route('mostrarprofe', $cate)}}">{{$cate["name"]}}</a>
                    <h5>#{{$cate["usuario"]}}</h5>
                    <p>Estado: {{$cate["estado"]}}</p>
                </hgroup>
            @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection