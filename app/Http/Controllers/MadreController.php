<?php

namespace App\Http\Controllers;

use App\Models\Madre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MadreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $madres = Madre::paginate(10);
        return view('madre.index',compact('madres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $madres = Madre::all();
        return view('madre.create',compact('madres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'Nombre_del_producto' => 'required',
            'Marca' => 'required',
            'Enchufe_de_CPU' => 'required',
            'Dispositivos_Compatibles' => 'required',
            'Tecnologia_de_la_memoria_RAM' => 'required',
            'Procesadores_Compatibles' => 'required',
            'Tipo_de_circuitos_integrados' => 'required',
            'Velocidad_del_reloj_de_la_memoria' => 'required',
            'Nombre_del_modelo' => 'required',
            'Capacidad_de_almacenamiento_de_la_memoria' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Madre::create($params);
        return redirect(route('madre.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Madre $madre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Madre $madre)
    {
        return view('madre.edit', compact('madre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Madre $madre)
    {
        $data = $request->validate([
            'Nombre_del_producto' => 'required',
            'Marca' => 'required',
            'Enchufe_de_CPU' => 'required',
            'Dispositivos_Compatibles' => 'required',
            'Tecnologia_de_la_memoria_RAM' => 'required',
            'Procesadores_Compatibles' => 'required',
            'Tipo_de_circuitos_integrados' => 'required',
            'Velocidad_del_reloj_de_la_memoria' => 'required',
            'Nombre_del_modelo' => 'required',
            'Capacidad_de_almacenamiento_de_la_memoria' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $madre->update($data);
        return redirect(route('madre.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Madre $madre)
    {
        $madre->delete();
        return redirect(route('madre.index'));
    }
}
