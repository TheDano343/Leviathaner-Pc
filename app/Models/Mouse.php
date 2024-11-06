<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
    use HasFactory;

    protected $primaryKey = 'idMouse';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Marca',
        'Tipo_de_conectividad',
        'Tecnologia_de_deteccion_de_movimiento',
        'Descripcion',
        'Portada'
    ];
    
    public function Equipo()
    {
        return $this->hasMany(Equipos::class, 'mouse_id','idMouse');
    }
}
