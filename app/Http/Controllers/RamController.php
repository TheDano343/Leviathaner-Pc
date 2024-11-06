<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rams = Ram::paginate(10);
        return view('ram.index',compact('rams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rams = Ram::all();
        return view('ram.create',compact('rams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $params = $request->validate([
            'Nombre_del_producto'=>'required',
            'Marca'=>'required',
            'Tegnologia_de_la_memoria_ram'=>'required',
            'Tamaño_de_la_memoria'=>'required',
            'Velocidad_de_memoria'=>'required',
            'Dispositivos_compatibles'=>'required',
            'Descripcion'=>'required',
            'Portada' => 'required'
        ]);
       
       
        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }
       
        Ram::create($params);
        return redirect()->route('ram.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ram $ram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ram $ram)
    {
        return view('ram.edit',compact('ram'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ram $ram)
    {
        $data = $request->validate([
            'Nombre_del_producto'=>'required',
            'Marca'=>'required',
            'Tegnologia_de_la_memoria_ram'=>'required',
            'Tamaño_de_la_memoria'=>'required',
            'Velocidad_de_memoria'=>'required',
            'Dispositivos_compatibles'=>'required',
            'Descripcion' => 'required',
             'Portada'  => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $data['Portada' ] = $path;
        }

        $ram->update($data);
        return redirect()->route('ram.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ram $ram)
    {
        $ram->delete();
        return redirect()->route('ram.index');
    }
}
