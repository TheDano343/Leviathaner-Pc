<?php

namespace App\Http\Controllers;

use App\Models\Gabinete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GabineteController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gabinetes = Gabinete::paginate(10);
        return view('Gabinete.index', compact('gabinetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gabinetes = Gabinete::all();
        return view('Gabinete.create',compact('gabinetes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $params = $request->validate([
        'Nombre_del_producto' => 'required',
        'Marca' => 'required',
        'Tipo_de_estuche' => 'required',
        'Usos_recomendados_para_el_producto' => 'required',
        'Color' => 'required',
        'Material' => 'required',
        'Metodo_de_enfriamiento' => 'required',
        'Nombre_del_modelo' => 'required',
        'Luces_de_colores' => 'required',
        'Tamaño_de_ventilador' => 'required',
        'Descripcion' => 'required',
        'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        
    
        Gabinete::create($params);
        return redirect()->route('gabinete.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Gabinete $gabinete)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gabinete $gabinete)
    { 
        return view('gabinete.edit', compact('gabinete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gabinete $gabinete)
    {
       $data = $request->validate([
        'Nombre_del_producto' => 'required',
        'Marca' => 'required',
        'Tipo_de_estuche' => 'required',
        'Usos_recomendados_para_el_producto' => 'required',
        'Color' => 'required',
        'Material' => 'required',
        'Metodo_de_enfriamiento' => 'required',
        'Nombre_del_modelo' => 'required',
        'Luces_de_colores' => 'required',
        'Tamaño_de_ventilador' => 'required',
        'Descripcion' => 'required',
        'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }
        
        $gabinete->update($data);
        return redirect()->route('gabinete.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gabinete $gabinete)
    {
        $gabinete->delete();
        return redirect()->route('gabinete.index');
    }
}
