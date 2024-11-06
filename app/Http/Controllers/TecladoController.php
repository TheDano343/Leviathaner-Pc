<?php

namespace App\Http\Controllers;

use App\Models\Teclado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TecladoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teclados = Teclado::paginate(10);
        return view('teclados.index',compact('teclados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teclados = Teclado::all();
        return view('teclados.create',compact('teclados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'Nombre_del_producto' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Tegnologia_de_conectividad' => 'required',
            'Descripcion_del_teclado' => 'required',
            'Usos_recomendados_para_producto' => 'required',
            'Caracteristica_especial' => 'required',
            'Color' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Teclado::create($params);
        return redirect()->route('teclado.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Teclado $teclado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teclado $teclado)
    {
        return view('teclados.edit',compact('teclado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teclado $teclado)
    {
        $data = $request->validate([
            'Nombre_del_producto' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Tegnologia_de_conectividad' => 'required',
            'Descripcion_del_teclado' => 'required',
            'Usos_recomendados_para_producto' => 'required',
            'Caracteristica_especial' => 'required',
            'Color' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $teclado->update($data);
        return redirect()->route('teclado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teclado $teclado)
    {
        $teclado->delete();
        return redirect()->route('teclado.index');
    }
}
