<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BanquetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('banquets')->insert([
                'name' => 'Banquet Name',
                'price' => 2000,
                'min_cap' => 300,
                'max_cap' => 600,
                'non_veg' => boolval(false),
                'place' => 'Banquet Place',
                'banquet_type' => Arr::random(['Premium', 'Economic', 'Basic']),
                'address' => 'Banquet Address'
            ]);
        }
    }
}
