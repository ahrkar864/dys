<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Players;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_matches = Match::all();
        return view("admin.matches.lists", compact('all_matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_players = Players::all();
        return view("admin.matches.add", compact('all_players'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            // 'score_player' => 'required|array',
            'place' => 'required|string|max:255',
            'datetime' => 'required|date_format:Y-m-d\TH:i',
            'take_goal' => 'required|string|max:10',
            'give_goal' => 'required|string|max:10',
            'image' => 'mimes:jpeg,jpg,png,gif'
        ]);

        if ($request->hasFile('image')) { 
            $imagePath = $request->file('image')->store('matches', 'public');    
            $validatedData['image'] = $imagePath;
        }

        $match = new Match([
            'score_player' => $request->score_player,
            'vs_team_name' => $request->vs_team_name,
            'place' => $validatedData['place'],
            'datetime' => $validatedData['datetime'],
            'take_goal' => $validatedData['take_goal'],
            'give_goal' =>  $validatedData['give_goal'],
            'image' => $validatedData['image'] ?? null,
        ]);

        $match->save();

        return redirect()->route('matches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
