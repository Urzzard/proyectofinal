@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #87E8B1; font-weight: bold;">{{ __('PERFIL DEL USUARIO') }}</div>
                    @foreach ($verperfil as $usuario)
                    <div class="perfil">
                        <hgroup>
                            <div class="nombre">
                            <p><strong>NOMBRE DE USUARIO:</strong></p>
                            <h1>{{$usuario["name"]}}</h1>
                            </div>
                            <div class="email">
                            <p><strong>DIRECCION DE CORREO:</strong></p>
                            <p>{{$usuario["email"]}}</p>
                            </div>
                        </hgroup>
                        <div class="eliminar">
                        <form method="POST" action="{{route('deleteuser',$usuario)}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-success">Eliminar cuenta</button>
                        </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .perfil{
        padding: 20px;
    }
    .nombre{
        margin-bottom: 40px;
    }
    .email{
        margin-bottom: 40px;
    }
</style>
@endsection