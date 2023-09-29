<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'Admindys',
            'email' => 'Admindys@gmail.com',
            'password' => bcrypt('Admindys1234'),
            'role' => 'admin',
        ]);
    }
}
