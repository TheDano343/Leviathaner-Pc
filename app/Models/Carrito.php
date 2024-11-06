<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $primaryKey = "id";

    protected $fillable = [
        'Nombre_producto',
        'quantity', 
        'users_id',
        'equipos_id',
        'Precio'
    ];


    public function Gabinete()
    {
        return $this->belongsTo(Gabinete::class);
    }

   public function Users()
   {
    return $this->belongsTo(User::class);
   }

    

}
