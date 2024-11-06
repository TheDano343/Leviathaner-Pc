<?php

namespace App\Http\Controllers;

use App\Models\Refrigeracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RefrigeracionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $refrigeraciones = Refrigeracion::paginate(10);
        return view('refrigeracion.index', compact('refrigeraciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $refrigeraciones = Refrigeracion::all();
        return view('refrigeracion.create', compact('refrigeraciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $params = $request->validate([
            'Nombre_del_producto' => 'required',
            'Dimensiones_del_producto' => 'required',
            'Voltaje' => 'required',
            'Metodo_de_enfriamiento' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Nivel_de_ruido' => 'required',
            'Material' => 'required',
            'Velocidad_maxima_de_rotacion' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Refrigeracion::create($params);
        return redirect()->route('refrigeracion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Refrigeracion $refrigeracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Refrigeracion $refrigeracion)
    {
       return view('refrigeracion.edit',compact('refrigeracion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Refrigeracion $refrigeracion)
    {
        $data = $request->validate([
            'Nombre_del_producto' => 'required',
            'Dimensiones_del_producto' => 'required',
            'Voltaje' => 'required',
            'Metodo_de_enfriamiento' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Nivel_de_ruido' => 'required',
            'Material' => 'required',
            'Velocidad_maxima_de_rotacion' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }



        $refrigeracion->update($data);
        return redirect()->route('refrigeracion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Refrigeracion $refrigeracion)
    {
        $refrigeracion->delete();
        return redirect()->route('refrigeracion.index');
    }
}
