@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #87E8B1; font-weight: bold;">{{ __('PROFESIONALES') }}</div>

                    
                    @foreach ($verprofe as $profe)
                        <div class="cajas">
                            <hgroup class="container">
                                <p><strong> Profesional de {{$profe["categoria"]}}</strong></p>
                                {{--<a style="font-size: 25px" href="ver-perfil-profe">{{$profe["name"]}}</a>--}}
                                <a style="font-size: 25px;" href="{{route('mostrarprofe', $profe)}}">{{$profe["name"]}}</a>
                                <h5>#{{$profe["usuario"]}}</h5>
                                <p>Estado: {{$profe["estado"]}}</p>
                            </hgroup>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
        .cajas{
            padding: 20px;
            border-bottom: solid 2px;
            border-color:aliceblue;
        }
        .cajas a{
            text-decoration: none;
            color: #76CC9B;
            
        }
        .cajas a:hover{
            color:black;
            font-weight: bold;
        }
</style>
@endsection