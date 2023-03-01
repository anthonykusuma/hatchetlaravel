<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('offices')->insert([
            'name' => 'St Georges Terrace',
            'price' => 1900,
            'num_offices' => 4,
            'num_tables' => 8,
            'sqm' => 300
        ]);

        DB::table('offices')->insert([
            'name' => 'Murray Street',
            'price' => 1700,
            'num_offices' => 3,
            'num_tables' => 6,
            'sqm' => 320
        ]);

        DB::table('offices')->insert([
            'name' => 'Barrack Street',
            'price' => 1750,
            'num_offices' => 3,
            'num_tables' => 6,
            'sqm' => 280
        ]);

        DB::table('offices')->insert([
            'name' => 'Hay Street',
            'price' => 1500,
            'num_offices' => 4,
            'num_tables' => 8,
            'sqm' => 300
        ]);

        DB::table('offices')->insert([
            'name' => 'William Street',
            'price' => 1300,
            'num_offices' => 2,
            'num_tables' => 4,
            'sqm' => 180
        ]);

        DB::table('offices')->insert([
            'name' => 'Wellington Street',
            'price' => 1200,
            'num_offices' => 2,
            'num_tables' => 3,
            'sqm' => 160
        ]);

        DB::table('offices')->insert([
            'name' => 'Adelaide Terrace',
            'price' => 980,
            'num_offices' => 2,
            'num_tables' => 3,
            'sqm' => 180
        ]);

        DB::table('offices')->insert([
            'name' => 'Kings Park Road',
            'price' => 850,
            'num_offices' => 1,
            'num_tables' => 2,
            'sqm' => 120
        ]);

        DB::table('offices')->insert([
            'name' => 'Roe Street',
            'price' => 690,
            'num_offices' => 1,
            'num_tables' => 1,
            'sqm' => 70
        ]);

    }
}
