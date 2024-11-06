<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    use HasFactory;

    protected $primaryKey = "idCpu";

    protected $fillable = [
        'Nombre_del_producto',
        'Fabricante_del_cpu',
        'Modelo_del_cpu',
        'Velocidad_del_cpu',
        'Descripcion',
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasMany(Equipos::class,'cpu_id','idCpu');
    }
}
