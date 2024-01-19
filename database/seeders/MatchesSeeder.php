<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'score_player' => json_encode(['Khant Maw Oo','Naung Htun Lwin']),
            'vs_team_name' => 'ROCK STAR FC',
            'place' => 'Alon Sit Myin Stadium',
            'datetime' => '2023-05-22',
            'give_goal' => '3',
            'take_goal' => '6',
            'image' => 'https://i.ibb.co/cDs30JZ/unnamed.jpg'
        ]);
    }
}
