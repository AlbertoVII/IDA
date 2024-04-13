<?php

namespace Database\Seeders;

use App\Models\Propiedad;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Propiedad::factory(10)->create();
    }
}
