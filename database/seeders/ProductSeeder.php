<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'RYZEN 5 5600',
            'stock' => '20',
            'price' => '100000',
            'category_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'INTEL gen 9°',
            'stock' => '10',
            'price' => '120000',
            'category_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'ZOWIE 144HZ 24"',
            'stock' => '5',
            'price' => '250000',
            'category_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'SAMSUNG 144HZ 27"',
            'stock' => '15',
            'price' => '180000',
            'category_id' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'REDRAGON KUMARA',
            'stock' => '25',
            'price' => '50000',
            'category_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'LOGITECH',
            'stock' => '10',
            'price' => '80000',
            'category_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
