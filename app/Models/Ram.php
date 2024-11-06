<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    protected $primaryKey = 'idRam';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Marca',
        'Tamaño_de_memoria_de_la_computadora',
        'Tegnologia_de_la_memoria_ram',
        'Tamaño_de_la_memoria',
        'Velocidad_de_memoria',
        'Dispositivos_compatibles',
        'Descripcion',
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasMany(Equipo::class, 'rams_id','idRam');
    }
}
