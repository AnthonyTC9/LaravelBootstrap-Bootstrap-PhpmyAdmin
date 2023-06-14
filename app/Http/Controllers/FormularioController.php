<?php

namespace App\Http\Controllers;


use App\Models\formulario;
use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class FormularioController extends Controller
{

    public function template(){
        return view('layouts.template');
    }

    public function store(Request $request){

        $request->validate(([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]));

        $correo = new ContactanosMailable($request->all());
        Mail::to('atapiac9@gmail.com')->send($correo);

        return "mensaje enviado";
    }

    //
    public function almacenar(Request $request)
    {
        $formulario = new Formulario();
        $formulario->nombre = $request->nombre;
        $formulario->correo = $request->correo;
        $formulario->telefono = $request->telefono;
        $formulario->mensaje = $request->mensaje;

        $formulario -> save();

    }


}
