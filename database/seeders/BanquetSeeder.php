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
                'min_cap' => Arr::random([300, 400, 100, 75, 50, 500]),
                'max_cap' => Arr::random([600, 500, 1500, 750, 550, 1000]),
                'non_veg' => boolval(false),
                'place' => Arr::random(['Newtown', 'Topsia', 'Airport', 'Ballygunge', 'Gariahat', 'Ruby']),
                'banquet_type' => Arr::random(['Premium', 'Economic', 'Basic']),
                'address' => 'Banquet Address'
            ]);
        }
    }
}
