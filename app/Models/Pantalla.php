<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantalla extends Model
{
    use HasFactory;

    protected $primaryKey = 'idPantallas';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Resolucion',
        'Tamaño_de_la_pantalla',
        'Descripcion_de_la_superficie_de_la_pantalla',
        'Descripcion',
        'Portada'
    ];
    
    public function Equipo()
    {
        return $this->hasMany(Equipos::class, 'pantallas_id','idPantallas');
    }
    
}
