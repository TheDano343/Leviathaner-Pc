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
        Schema::create('pantallas', function (Blueprint $table) {
            $table->id('idPantallas');
            $table->string('Nombre_del_producto');
            $table->string('Resolucion');
            $table->string('Tamaño_de_la_pantalla');
            $table->text('Descripcion_de_la_superficie_de_la_pantalla');
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
        Schema::dropIfExists('pantallas');
    }
};
