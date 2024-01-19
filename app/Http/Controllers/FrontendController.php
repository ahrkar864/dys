<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Matches;
use App\Models\Players;
use App\Models\Profile;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $all_profile_club_information = Profile::first();
        $lastMatch = Matches::latest()->first();   
        return view('frontend.home', compact('all_profile_club_information','lastMatch'));
    }

    public function about(){
        $all_profile_club_information = Profile::first();
        return view('frontend.about', compact('all_profile_club_information'));
    }

    public function matches(){
        $all_matches = Matches::paginate(4);
        $lastMatch = Matches::latest()->first();
        $all_profile_club_information = Profile::first();   
        return view("frontend.matches", compact('all_matches','lastMatch','all_profile_club_information'));
    }

    public function players(){
        $all_players = Players::paginate(8);
        $all_profile_club_information = Profile::first();   
        return view("frontend.players", compact('all_players', 'all_profile_club_information'));
    }

    public function playerDetails($id){
        $player = Players::findOrFail($id);
        $all_profile_club_information = Profile::first();
        return view('frontend.player_details', compact('player','all_profile_club_information'));
    }

    public function blogs() {
        $all_blogs = Blog::paginate(4);
        $all_profile_club_information = Profile::first();
        return view("frontend.blogs", compact('all_blogs', 'all_profile_club_information'));
    }

    public function contact(){
        $all_profile_club_information = Profile::first();
        return view('frontend.contact', compact('all_profile_club_information'));
    }





}
