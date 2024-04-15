<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Propiedad>
 */
class PropiedadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'descripcion' => $this->faker->paragraph,
            'precio' => $this->faker->numberBetween(10000, 500000),
            'direccion' => $this->faker->address,
            //'cliente_id' => \App\Models\cliente::factory(), // Asegúrate de tener un UserFactory para relacionar
            //'imagen' => $this->faker->imageUrl(640, 480, 'propiedades', true),
        ];
    }
}
