<?php

namespace App\Http\Controllers;

use App\Models\Cpu;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cpus = Cpu::paginate(10);
        return view('cpu.index', compact('cpus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cpus = Cpu::all();
        return view('cpu.create', compact('cpus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
        'Nombre_del_producto' => 'required',
        'Fabricante_del_cpu' => 'required',
        'Modelo_del_cpu' => 'required',
        'Velocidad_del_cpu' => 'required',
        'Descripcion' => 'required',
        'Portada' => 'required'
        ]);

        if($request->hasFile('Portada'))
        {
            $path = $request->file('Portada')->store('upload','public');
            $params['Portada'] = $path;
        }

        Cpu::create($params);
        return redirect()->route('cpu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cpu $cpu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cpu $cpu)
    {
        return view('cpu.edit', compact('cpu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cpu $cpu)
    {
        $data = $request->validate([
            'Nombre_del_producto' => 'required',
            'Fabricante_del_cpu' => 'required',
            'Modelo_del_cpu' => 'required',
            'Velocidad_del_cpu' => 'required',
            'Descripcion' => 'required',
            'Portada' => 'required'
            ]);
    
            if($request->hasFile('Portada'))
            {
                $path = $request->file('Portada')->store('upload','public');
                $data['Portada'] = $path;
            }
    
            $cpu->update($data);
            return redirect()->route('cpu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cpu $cpu)
    {
        $cpu->delete();
        return redirect()->route('cpu.index');
    }
}
