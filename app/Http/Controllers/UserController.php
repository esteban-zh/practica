<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function mostrar()
    {
        $usuarios = User::all();

        return view('usuarios', ['datos'=>$usuarios]);
    }
    public function editar($IdUsuario)
    {
        $usuario = User::find($IdUsuario);
        return view('editar', ['usuario'=>$usuario]);
        // return $usuario;
    }
    public function actualizar(Request $request, $IdUsuario)//lo que recibimos de las dos opciones de del select de bootstrap
    {
        $usuario = User::find($IdUsuario);
        $state = $usuario->enable;
        if ($request->estado==='1') {
            $state=true;
        }
        if ($request->estado==='0') {
            $state=false;
        }
        $usuario->update(['name'=>$request->nombre,'enable'=>$state]);
        return redirect()->route('usuarios.mostrar');
    }
}
