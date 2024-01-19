<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'name' => 'dagon youth star football club',
            'email' => 'admindys@gmail.com',
            'address' => 'myoma kyaung road yangon',
            'caption' => 'we are dys(since 2017)',
            'phone' => '09250150528',
            'cover_photo' => 'https://i.ibb.co/pdJmfx2/bg-3.jpg',
            'logo_photo' => 'https://i.ibb.co/SJgdPCs/dys.jpg',
            'facebook_link' => 'https://www.facebook.com',
            'telegram_link' => 'https://www.telegram.com/',
            'youtube_link' => 'https://www.youtube.com/',
            'copyright' => '2024 @ copyright',
            'about_caption' => 'we are dys',
            'matches_caption' => 'we play by heart',
            'blogs_caption' => 'happily days family',
            'players_caption' => 'all of our own',
            'description' => 'Dagon Youth Star Football Club is a prominent football institution located in the vibrant city of Yangon, Myanmar. Established with a passion for the sport and a commitment nurturing young talent, our club stands as a beacon for football enthusiasts in the region.At Dagon Youth Star Football Club, our mission is to foster the growth of aspiring football players, instilling in them not just the skills of the game but also the values of discipline, teamwork, and resilience. We believe in creating an environment where young talents can thrive, where the spirit of sportsmanship prevails, and where every player is encouraged to reach their full potential.Beyond the football pitch, Dagon Youth Star Football Club actively engages with the local community. We organize events, workshops, and outreach programs to promote the sport and encourage active participation among the youth. By connecting with the community, we aim to be not just a football club but a catalyst for positive change.Whether you are a young talent dreaming of a career in football or a passionate supporter of the sport, Dagon Youth Star Football Club welcomes you to join our journey. Together, lets embrace the thrill of the game, build lasting friendships, and contribute to the growth of football in Myanmar and beyond.'
        ]);
    }
}
