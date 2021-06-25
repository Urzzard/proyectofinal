@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #87E8B1; font-weight: bold;">{{ __('CATEGORIAS') }}</div>
                    @foreach ($vercate as $cate)
                        <div class="cates">
                            <hgroup>
                                <a style="font-size: 25px" href="{{route('verporcate',$cate->categoria)}}">{{$cate["categoria"]}}</a>
                            </hgroup>
                        <div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .cates{
        text-align: center;
    }
    .cates a{
        text-decoration: none;
            color: #76CC9B;
            
    }
    .cates a:hover{
            color:black;
            font-weight: bold;
    }
</style>
@endsection