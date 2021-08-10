<?php

namespace App\Http\Controllers;

use App\Usuario;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function create(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nombre = $request->input('nombre');
        $usuario->apellido = $request->input('apellido');
        $usuario->dni = $request->input('dni');
        $usuario->correo = $request->input('correo');
        $usuario->telefono = $request->input('telefono');
        $estado = $usuario->save();

        return response()->json([
            'estado' => $estado
        ]);
    }

    public function userList()
    {
        $usuarios = Usuario::all();
        return view('userList', ['usuarios' => $usuarios]);
    }
}
