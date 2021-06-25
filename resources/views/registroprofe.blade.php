@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #87E8B1; font-weight: bold;">{{ __('SER PROFESIONAL') }}</div>
                    <div class="form-profe">
                        <p>Para poder convertirse en profesional y poder brindar servicios en la plataforma, necesita rellenar el siguiente formulario.</p>
                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    - {{$error}} <br>
                                @endforeach
                            </div>

                        @endif
                        
                        <form action="{{ route('store')}}" method="post">
                            @csrf
                            <div class="cajotas">
                            <label for="usuario" class="col-form-label text-md-right">USUARIO</label>
                            <input id="usuario" name="usuario" class="form-control" type="text" placeholder="Usuario">
                            </div>
                            <div class="cajotas">
                            <label for="edad" class="col-form-label text-md-right">EDAD</label>
                            <input id="edad" name="edad" class="form-control" type="text" placeholder="Edad">
                            </div>
                            <div class="cajotas">
                            <label for="telefono" class="col-form-label text-md-right">TELEFONO</label>
                            <input id="telefono" name="telefono" class="form-control" type="text" placeholder="Telefono">
                            </div>
                            <div class="cajotas">
                            <label for="categoria" class="col-form-label text-md-right">CATEGORIA</label>
                            <select name="categoria" id="categoria" class="form-control">
                                <option value="Programacion">Programacion</option>
                                <option value="Diseño">Diseño</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Transporte">Transporte</option>
                                <option value="Limpieza">Limpieza</option>
                                <option value="Animacion">Animacion</option>
                                <option value="Traduccion">Traduccion</option>
                                <option value="Belleza">Belleza</option>
                                <option value="Construccion">Construccion</option>
                                <option value="Reparacion">Reparacion</option>
                            </select>
                            </div>
                            <div class="cajotas">
                            <label for="descripcion" class="col-form-label text-md-right">DESCRIPCION</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" cols="30" rows="5" placeholder="agregue una breve descripcion de su trabajo..."></textarea>
                            </div>
                            <div class="botonazo">
                            <button type="submit" class="btn btn-success">
                                Terminar Registro
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .form-profe{
        padding: 20px;
    }
    .cajotas{
        margin: 0px 0px 20px 0px;  
        font-weight: bold;
    }
    .botonazo{
        text-align: center;
    }
    
</style>

@endsection