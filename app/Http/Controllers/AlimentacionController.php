<?php

namespace App\Http\Controllers;

use App\Models\Alimentacion;
use Illuminate\Http\Request;

class AlimentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alimentaciones = Alimentacion::paginate(10);
        return view('alimentacion.index',compact('alimentaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alimentaciones = Alimentacion::all();
        return view('alimentacion.create',compact('alimentaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $params = $request->validate([
            'Nombre_producto' => 'required',
            'Nombre_modelo' => 'required',
            'Marca' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Tipo_conector' => 'required',
            'Potencia_de_salida' => 'required',
            'Factor_de_forma' => 'required',
            'Voltaje' => 'required',
            'Metodo_de_enfriamiento' => 'required',
            'Dimensiones_de_articulo' => 'required',
            'Largo_y_ancho' => 'required',
            'Peso_del_producto' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Alimentacion::create($params);
        return redirect()->route('alimentacion.index');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Alimentacion $alimentacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alimentacion $alimentacion)
    {
        return view('alimentacion.edit', compact('alimentacion'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alimentacion $alimentacion)
    {
        $data = $request->validate([
            'Nombre_producto' => 'required',
            'Nombre_modelo' => 'required',
            'Marca' => 'required',
            'Dispositivos_compatibles' => 'required',
            'Tipo_conector' => 'required',
            'Potencia_de_salida' => 'required',
            'Factor_de_forma' => 'required',
            'Voltaje' => 'required',
            'Metodo_de_enfriamiento' => 'required',
            'Dimensiones_de_articulo' => 'required',
            'Largo_y_ancho' => 'required',
            'Peso_del_producto' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada'] = $path;
        }

        $alimentacion->update($data);
        return redirect()->route('alimentacion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alimentacion $alimentacion)
    {
        $alimentacion->delete();
        return redirect()->route('alimentacion.index');
    }
}
