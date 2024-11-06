<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Equipo;
use App\Models\Alimentacion;
use App\Models\Cpu;
use App\Models\Gabinete;
use App\Models\Grafica;
use App\Models\Madre;
use App\Models\Mouse;
use App\Models\Pantalla;
use App\Models\Procesador;
use App\Models\Ram;
use App\Models\Refrigeracion;
use App\Models\Teclado;
use App\Models\Cart;
use App\Models\Tienda;
use App\Models\Categoria;

class TiendaController extends Controller
{
    public function index()
    {
        $equipos = Equipo::orderBy('categorias_id','asc')->paginate(9);
        return view('tienda.index',compact('equipos'));
    }


    public function edit(Equipo $tienda)
    {
        return view('tienda.edit',compact('tienda'));

    }

    public function show(Equipo $tienda,Request $request)
    {
        return view('tienda.show',compact('tienda'));
    }


    public function stripe()
    {
        return view('tienda.checkout');
    }


}


