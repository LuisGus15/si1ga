<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Zapatos'
        ]);

        Categoria::create([
            'nombre' => 'medias'
        ]);

        Categoria::create([
            'nombre' => 'short'
        ]);

        Categoria::create([
            'nombre' => 'polera'
        ]);
    }
}
