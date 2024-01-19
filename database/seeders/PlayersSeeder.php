<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => 'Aung Khant',
            'positions' => json_encode(['Goalkeeper','Forward - Striker','Forward - Center Forward']),
            'phone' => '09123456789',
            'description' => 'Goalkeep player',
            'no' => '1',
            'height' => '1.90',
            'dob' => '2000-09-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/Ks3xtVD/dys-1.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Kyaw Myint Oo',
            'positions' => json_encode(['Defender - Right Back','Defender - Left Back','Defender - Wing-back']),
            'phone' => '09123456789',
            'description' => 'Defend player',
            'no' => '3',
            'height' => '1.70',
            'dob' => '1994-09-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/1QLgT11/dys-3.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Chit San Hlaing',
            'positions' => json_encode(['Defender - Center Back','Defender - Sweeper']),
            'phone' => '09123456789',
            'description' => 'Defend player',
            'no' => '5',
            'height' => '1.70',
            'dob' => '1994-09-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/CJSFKch/dys-5.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Aung Khant Kyaw',
            'positions' => json_encode(['Midfielder - Central Midfield','Midfielder - Defensive Midfield','Midfielder - Right Midfield',
            'Midfielder - Left Midfield']),
            'phone' => '09123456789',
            'description' => 'Midfield player',
            'no' => '6',
            'height' => '1.90',
            'dob' => '2000-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/0FLsynw/dys-6.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Pyae Phyo Win',
            'positions' => json_encode(['Midfielder - Central Midfield','Midfielder - Defensive Midfield','Midfielder - Right Midfield',
            'Midfielder - Left Midfield', 'Midfielder - Attacking Midfield']),
            'phone' => '09123456789',
            'description' => 'Midfield player',
            'no' => '7',
            'height' => '1.90',
            'dob' => '2001-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/Y8hY8w4/dys-7.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Kaung Myat Thu',
            'positions' => json_encode(['Midfielder - Central Midfield','Midfielder - Defensive Midfield','Midfielder - Right Midfield',
            'Midfielder - Left Midfield', 'Midfielder - Attacking Midfield']),
            'phone' => '09123456789',
            'description' => 'Midfield player',
            'no' => '8',
            'height' => '1.90',
            'dob' => '1995-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/wcPwtbg/dys-8.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Soe Min Htet',
            'positions' => json_encode(['Forward - Center Forward','Forward - Striker']),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '9',
            'height' => '1.90',
            'dob' => '1997-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/nwqcNXN/dys-9.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Khant Maw Oo',
            'positions' => json_encode(['Midfielder - Attacking Midfield','Forward - Right Winger','Forward - Left Winger']),
            'phone' => '09123456789',
            'description' => 'Midfield and Forward player',
            'no' => '10',
            'height' => '1.90',
            'dob' => '2001-08-04',
            'preferred_foot' => 'left',
            'image' => 'https://i.ibb.co/ZznCyhq/dys-10.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Naung Htun Lwin',
            'positions' => json_encode(['Forward - Right Winger','Forward - Left Winger']),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '11',
            'height' => '1.70',
            'dob' => '2001-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/crXQpVP/dys-11.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Aung Khant Ko Ko',
            'positions' => json_encode(['Defender - Right Back','Defender - Left Back','Defender - Wing-back']),
            'phone' => '09123456789',
            'description' => 'Defend player',
            'no' => '12',
            'height' => '1.70',
            'dob' => '2002-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/V95j6jH/dys-12.jpg'
        ]);


        DB::table('players')->insert([
            'name' => 'Yarzar Tun',
            'positions' => json_encode(['Defender - Center Back','Defender - Sweeper']),
            'phone' => '09123456789',
            'description' => 'Defend player',
            'no' => '15',
            'height' => '1.90',
            'dob' => '1997-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/ggCN1Kn/dys-15.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Sai khun Pha',
            'positions' => json_encode(['Midfielder - Central Midfield','Midfielder - Defensive Midfield','Midfielder - Right Midfield','Midfielder - Left Midfield']),
            'phone' => '09123456789',
            'description' => 'Midfeld player',
            'no' => '16',
            'height' => '1.70',
            'dob' => '1994-08-04',
            'preferred_foot' => 'right',
            'image' => ''
        ]);


        DB::table('players')->insert([
            'name' => 'Htin Lin Oo',
            'positions' => json_encode(['Midfielder - Attacking Midfield','Forward - Right Winger','Forward - Left Winger']),
            'phone' => '09123456789',
            'description' => 'Midfeld and Forward player',
            'no' => '17',
            'height' => '1.70',
            'dob' => '2002-08-04',
            'preferred_foot' => 'left',
            'image' => 'https://i.ibb.co/sKQYnqS/dys-17.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Kyaw Myint Tun',
            'positions' => json_encode(['Defender - Center Back','Defender - Right Back','Defender - Left Back','Defender - Sweeper']),
            'phone' => '09123456789',
            'description' => 'Defend player',
            'no' => '18',
            'height' => '1.70',
            'dob' => '2001-08-04',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/MkTWcxL/dys-18.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Phyo Thura Kyaw',
            'positions' => json_encode(['Midfielder - Central Midfield','Midfielder - Defensive Midfield','Midfielder - Right Midfield','Midfielder - Left Midfield']),
            'phone' => '09123456789',
            'description' => 'Midfield player',
            'no' => '22',
            'height' => '1.70',
            'dob' => '1999-08-04',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Wai Yan Myo Tint',
            'positions' => json_encode(['Midfielder - Central Midfield','Midfielder - Defensive Midfield','Midfielder - Attacking Midfield','Midfielder - Right Midfield','Midfielder - Left Midfield']),
            'phone' => '09123456789',
            'description' => 'Midfield player',
            'no' => '24',
            'height' => '1.70',
            'dob' => '1999-08-04',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Ahrkar Kyaw',
            'positions' => json_encode(['Forward - Right Winger','Forward - Left Winger']),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '29',
            'height' => '1.90',
            'dob' => '1999-04-16',
            'preferred_foot' => 'left',
            'image' => 'https://i.ibb.co/DrcjdKm/dys-29.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Aung Myo Thu',
            'positions' => json_encode(['Forward - Right Winger','Forward - Left Winger']),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '30',
            'height' => '1.70',
            'dob' => '2003-04-16',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Nay Lin Thein',
            'positions' => json_encode(['Defender - Center Back','Defender - Right Back','Defender - Left Back','Defender - Sweeper','Defender - Wing-back']),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '33',
            'height' => '1.70',
            'dob' => '2001-04-16',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Zin Ko Htet',
            'positions' => json_encode(['Forward - Right Winger','Forward - Left Winger']),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '41',
            'height' => '1.70',
            'dob' => '1999-04-16',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Kaung Htut',
            'positions' => json_encode(['Midfielder - Central Midfield','Midfielder - Defensive Midfield','Midfielder - Right Midfield','Midfielder - Left Midfield','Midfielder - Box-to-Box Midfield','Midfielder - Wide Midfield']),
            'phone' => '09123456789',
            'description' => 'Midfield player',
            'no' => '55',
            'height' => '1.70',
            'dob' => '1997-04-16',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Aung Myint Oo',
            'positions' => json_encode(['Defender - Right Back','Defender - Left Back','Defender - Wing-back']),
            'phone' => '09123456789',
            'description' => 'Defentd player',
            'no' => '66',
            'height' => '1.70',
            'dob' => '1991-04-16',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Arkar htet',
            'positions' => json_encode(['Defender - Right Back','Defender - Left Back','Defender - Wing-back']),
            'phone' => '09123456789',
            'description' => 'Defentd player',
            'no' => '72',
            'height' => '1.70',
            'dob' => '2001-04-16',
            'preferred_foot' => 'right',
            'image' => 'https://i.ibb.co/cTxKDJG/dys-72.jpg'
        ]);

        DB::table('players')->insert([
            'name' => 'Aung Khant Zaw',
            'positions' => json_encode(['Forward - Center Forward','Forward - Striker',
            'Forward - Right Winger','Forward - Left Winger',]),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '88',
            'height' => '1.90',
            'dob' => '2001-04-16',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

        DB::table('players')->insert([
            'name' => 'Yan Naing Phone',
            'positions' => json_encode(['Forward - Center Forward','Forward - Striker']),
            'phone' => '09123456789',
            'description' => 'Forward player',
            'no' => '99',
            'height' => '1.90',
            'dob' => '1998-04-16',
            'preferred_foot' => 'right',
            'image' => ''
        ]);

    }
}


// DB::table('users')->insert([
//     'name' => Str::random(10),
//     'email' => Str::random(10).'@gmail.com',
//     'password' => Hash::make('password'),
// ]);
