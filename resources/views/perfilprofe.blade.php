@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #87E8B1; font-weight: bold;">{{ __('PERFIL DEL PROFESIONAL') }}</div>
                
                    @foreach ($verperfil as $profe)
                        <div class="profe">
                            <h1>{{$profe->name}}</h1>
                            <div class="profe-caja">
                                <div class="izq">
                                    <p><strong>Nombre de Usuario: </strong><h5>#{{$profe->usuario}}</h5></p>
                                    <p><strong>Direccion de correo: </strong><br>{{$profe->email}}</p>
                                    <p><strong>Edad: </strong><br>{{$profe->edad}}</p>
                                    <p><strong>Contacto: </strong><br>{{$profe->telefono}}</p>
                                </div>
                                <div class="der">
                                    <p><strong>Profesional de: </strong><br>{{$profe->categoria}}</p>
                                    <p><strong>Descripcion: </strong><br>{{$profe->descripcion}}</p>
                                    <p><strong>Estado: </strong><br>{{$profe->estado}}</p>
                                    @if ($profe->id!=auth()->id())
                                    <form method="POST" action="{{route('cambio',$profe)}}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Contratar</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .profe{
        padding: 30px;
    }
    h1{
        margin-bottom: 20px;
    }
    .profe-caja{
        display: flex;
    }
    .izq{
        margin-right: 60px;
    }
    p{
        margin-bottom: 20px;
    }
</style>

@endsection