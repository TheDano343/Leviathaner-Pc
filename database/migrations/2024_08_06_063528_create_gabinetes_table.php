<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gabinetes', function (Blueprint $table) {
            $table->id('idGabinetes');
            $table->string('Nombre_del_producto');
            $table->string('Marca');
            $table->string('Tipo_de_estuche');
            $table->string('Usos_recomendados_para_el_producto');
            $table->string('Color');
            $table->string('Material');
            $table->string('Metodo_de_enfriamiento');
            $table->string('Nombre_del_modelo');
            $table->string('Luces_de_colores');
            $table->string('Tamaño_de_ventilador');
            $table->text('Descripcion');
            $table->string('Portada');
     
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gabinetes');
    }
};
