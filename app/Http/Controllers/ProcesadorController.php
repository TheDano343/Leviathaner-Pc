<?php

namespace App\Http\Controllers;

use App\Models\Procesador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProcesadorController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $procesadores = Procesador::paginate(10);
        return view('procesadores.index',compact('procesadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $procesadores = Procesador::all();
        return view('procesadores.create',compact('procesadores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'Nombre_del_producto' => 'required',
            'Marca' => 'required',
            'Fabricante_del_CPU' => 'required',
            'Modelo_del_CPU' => 'required',
            'Velocidad_del_CPU' => 'required',
            'Enchufe_del_CPU' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Procesador::create($params);
        return redirect()->route('procesador.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Procesador $procesador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Procesador $procesador)
    {
        return view('procesadores.edit',compact('procesador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Procesador $procesador)
    {
        $data = $request->validate([
            'Nombre_del_producto'=>'required',
            'Marca'=>'required',
            'Fabricante_del_CPU'=>'required',
            'Modelo_del_CPU'=>'required',
            'Velocidad_del_CPU'=>'required',
            'Enchufe_del_CPU'=>'required',
            'Descripcion'=>'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $procesador->update($data);
        return redirect()->route('procesador.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procesador $procesador)
    {
        $procesador->delete();
        return redirect()->route('procesador.index');
    }
}
