<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class controllerContacto extends Controller
{
    public function index(Request $request){

        $search = $request->get('buscarpor');
        $contactos = Contacto::where('nombre', 'like', '%'.$search.'%')
                            ->get();

        return view('index',[
            'contactos' => $contactos
        ]);
    }

    public function create(){
  
        return view('create');

    }

    public function store(){

        // reglas de validaciones
        $rules = [
            'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u'],
            'apellido' => ['required', 'regex:/^[\pL\s\-]+$/u'],
            'edad' => ['required', 'numeric'],
            'direccion' => ['required'],
            'correo' => ['required', 'email'],
            'telefono' => ['required', 'numeric'],
    
        ];

        //paso el $rules al validate para q sean valido el form sino manda el mensaje de error
        request()->validate( $rules );

        // guardo en la bd
        $contacto = Contacto::create(request()->all());

        //retornar
        return redirect()->route('index')->with([ 'message' => "Se ha guardado el contacto {$contacto->nombre} correctamente" ]);
    }

    public function edit ( $id ) {
        
        $contacto = Contacto::findOrFail( $id );
 
        return view( 'edit',[
            'contacto' => $contacto
        ]);
    }


    public function update( $id ){

        $contacto = Contacto::findOrFail( $id );

       // reglas de validaciones
       $rules = [
        'nombre' => ['required', 'regex:/^[\pL\s\-]+$/u'],
        'apellido' => ['required', 'regex:/^[\pL\s\-]+$/u'],
        'edad' => ['required', 'numeric'],
        'direccion' => ['required'],
        'correo' => ['required', 'email'],
        'telefono' => ['required', 'numeric'],

        ];

        //paso el $rules al validate para q sean valido el form sino manda el mensaje de error
        request()->validate( $rules );

        // actualizar en la bd
        $contacto->update(request()->all());

        //retornar
        return redirect()->route('index')->with([ 'message' => "Se ha editado el contacto {$contacto->nombre} correctamente" ]);

    }

    public function delete ( $id ) {

        $contacto = Contacto::findOrFail( $id );

        //eliminar
        $contacto->delete();

        // return $product;
        return redirect()->route('index')->with([ 'message' => 'Se ha ELIMINADO correctamente el contacto' ]);

    }
}
