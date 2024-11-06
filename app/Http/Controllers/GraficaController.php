<?php

namespace App\Http\Controllers;

use App\Models\Grafica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GraficaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $graficas = Grafica::paginate(10);
        return view('grafica.index', compact('graficas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $graficas = Grafica::all();
        return view('grafica.create', compact('graficas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $params = $request->validate([
            'Nombre_del_producto' => 'required',
            'Coprocesador' => 'required',
            'Marca' => 'required',
            'Ram_para_graficos' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Grafica::create($params);
        return redirect()->route('grafica.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grafica $grafica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grafica $grafica)
    {
        return view('grafica.edit', compact('grafica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grafica $grafica)
    {
        $data = $request->validate([
            'Nombre_del_producto' => 'required',
            'Coprocesador' => 'required',
            'Marca' => 'required',
            'Ram_para_graficos' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $grafica->update($data);
        return redirect()->route('grafica.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grafica $grafica)
    {
        $grafica->delete();
        return redirect()->route('grafica.index');

    }
}
