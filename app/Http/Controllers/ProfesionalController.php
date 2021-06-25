<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Profesional;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    /*public function ingresar(User $user){
        return view('registroprofe');
    }*/
    public function mostrar(Profesional $profesional){
        $profesional = new Profesional();
        $verprofe = $profesional::join('users', 'profesionals.id_usuario', '=','users.id' )->get();
        return view("verprofe", ["verprofe"=>$verprofe]);
        /*$profesional = new Profesional();
        $verprofe = $profesional::where('profesionals.id_usuario', '=', 'users.id')
                                ->join('users', 'profesionals.id_usuario', '=','users.id')
                                ->get();
        return view("verprofe", ['verprofe'=>$verprofe]);*/
    }

    public function mostrarperfil($id){
        $verperfil = Profesional::where('users.id','=',$id)->join('users','users.id', '=','profesionals.id_usuario')->get();
        return view("perfilprofe", ["verperfil"=>$verperfil]);
    }

    public function categorias(){
        $categorias = new Profesional();
        $vercate = $categorias::get();
        return view("vercate", ["vercate"=>$vercate]);
    }

    public function vercategorias($categoria){
        $categoria = Profesional::where('profesionals.categoria','=',$categoria)->join('users','users.id', '=','profesionals.id_usuario')->get();
        return view("profexcate", ["categoria"=>$categoria]);
    }

    public function store(Request $request){

        $request->validate([
            'usuario' => ['required','min:5'],
            'edad' => 'required',
            'telefono' => ['required','min:8'],
            'categoria' => ['required','min:7'],
            'descripcion' => ['required','max:120']
        ]);

        Profesional::create([
            'id_usuario'=>auth()->id(),
            'usuario' => $request->usuario,
            'edad' => $request->edad,
            'telefono' => $request->telefono,
            'categoria' => $request->categoria,
            'descripcion' => $request->descripcion
        ]);

        $tipo = User::where('id','=',auth()->id())->update(['tipo'=>'Profesional']);

        return redirect()->route('home');
    }

    public function estado($id){
       $estado = Profesional::where('id','=',$id)->update(['estado'=>'Ocupado']);
       /*if ($estado->estado=='Disponible') {
           $estado = $estado::update(['estado'=>'Ocupado']);
       }else{
            $estado = $estado::update(['estado'=>'Disponible']);
       }
       /*if ($estado->estado=='Disponible') {
        $estado::update(['estado'=>'Ocupado']);
        }else{
            $estado::update(['estado'=>'Disponible']);
        }*/
       return redirect()->route('verprofe');
    }

    public function destroy(){
        
    }
}
