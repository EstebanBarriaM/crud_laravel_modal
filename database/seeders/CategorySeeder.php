<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Procesadores',
            'description' => 'El cerebro de cada computador',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Monitores',
            'description' => 'Monitores, lo mejor para visualizar tus ideas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categories')->insert([
            'name' => 'Teclados',
            'description' => 'Hardware importante para tus juegos o programacion',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
