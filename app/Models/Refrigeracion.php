<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refrigeracion extends Model
{
    use HasFactory;

    protected $primaryKey = "idSistema_refrigeracion";

    protected $fillable = [
        'Nombre_del_producto',
        'Dimensiones_del_producto',
        'Voltaje',
        'Metodo_de_enfriamiento',
        'Dispositivos_compatibles',
        'Nivel_de_ruido',
        'Material',
        'Velocidad_maxima_de_rotacion',
        'Descripcion',
        'Portada'

    ];
    
    public function Equipo()
    {
        return $this->hasMany(Equipos::class, 'refrigeracion_id','idSistema_refrigeracion');
    }
}
