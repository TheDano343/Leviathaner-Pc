<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teclado extends Model
{
    use HasFactory;

    protected $primaryKey = 'idTeclado';

    protected $fillable = 
    [
        'Nombre_del_producto',
        'Dispositivos_compatibles',
        'Tegnologia_de_conectividad',
        'Descripcion_del_teclado',
        'Usos_recomendados_para_producto',
        'Caracteristica_especial',
        'Color',
        'Descripcion',
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasMany(Equipos::class, 'teclados_id','idTeclado');
    }
}
