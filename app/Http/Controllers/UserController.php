<?php

namespace App\Http\Controllers;
use App\Models\Profesional;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mostrar(){
        $usuario = new User();
        $profe = new Profesional();
        
        $nuevo = $usuario::get();
        $nuevo2 = $profe::get();
        
        /*
        if ($usuario['id']==$profe['id_usuario']) {
            $verperfil = $usuario::join('profesionals', 'profesionals.id_usuario', '=','users.id' )->where('users.id', '=', auth()->id())->get();

            return view("perfilusuario", ["verperfil"=>$verperfil]);
        }else{
            $verperfil = $usuario::where('users.id', '=', auth()->id())->get();

            return view("perfilusuario", ["verperfil"=>$verperfil]);
        }*/
        $verperfil = $usuario::where('users.id', '=', auth()->id())->get();

        return view("perfilusuario", ["verperfil"=>$verperfil]);

        
    }

    /*public function validarUsuario(User $users){
        $usuarios = new User();
        $verusuario = $usuarios::get();
        return view("layouts.app", ["verusuario"=>$verusuario]);
    }*/

    public function destroy(User $user,$usuario)
    {
        $delete = User::find($usuario);
        $delete->delete();
        return view('welcome');
    }

}
