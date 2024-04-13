<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puja>
 */
class PujaFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Puja::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'propiedad_id' => \App\Models\Propiedad::factory(),
            'monto' => $this->faker->numberBetween(10000, 500000), // Genera un monto aleatorio entre 10,000 y 500,000
        ];
    }
}
