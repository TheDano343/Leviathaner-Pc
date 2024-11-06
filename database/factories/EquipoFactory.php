<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipos>
 */
class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre_producto' => $this->faker->name(),
            'Tipo_de_tarjeta_grafica' => $this->faker->name(),
            'procecadores_id' => $this->faker->numberBetween(1,200),
            'gabinetes_id' => $this->faker->numberBetween(1,200),
            'pantallas_id' => $this->faker->numberBetween(1,200),
            'teclados_id' => $this->faker->numberBetween(1,200),
            'mouse_id' => $this->faker->numberBetween(1,200),
            'rams_id' => $this->faker->numberBetween(1,200),
            'graficas_id' => $this->faker->numberBetween(1,200),
            'madres_id' => $this->faker->numberBetween(1,200),
            'refrigeracion_id' => $this->faker->numberBetween(1,200),
            'alimentaciones_id' => $this->faker-> numberBetween(1,200),
            'cpu_id' =>  $this->faker->numberBetween(1,300),
            'Descripcion' =>  $this->faker->paragraph(),
            'Precio' => $this->faker->numerify()
        ];
    }
}
