<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grafica extends Model
{
    use HasFactory;

    protected $primaryKey = "idTarjetaGrafica";

    protected $fillable = [
        'Nombre_del_producto',
        'Coprocesador',
        'Marca',
        'Ram_para_graficos',
        'Descripcion',
        'Portada'
    ];

    public function Equipo()
    {
        return $this->hasMany(Equipo::class,'graficas_id','idTarjetaGrafica');
    }
}
