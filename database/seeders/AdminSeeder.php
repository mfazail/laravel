<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Fazail Alam',
            'user_type'=> 'DEV',
            'email'=>'fazailalam898@gmail.com',
            'password'=> Hash::make('12345678'),
            'created_at'=> now()
        ]);
    }
}
