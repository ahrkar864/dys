<?php

namespace App\Http\Controllers;

use App\Models\Match;
use App\Models\Players;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'vs_team_name' => 'required|string|max:255',
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
            'vs_team_name' => $validatedData['vs_team_name'],
            'place' => $validatedData['place'],
            'datetime' => $validatedData['datetime'],
            'take_goal' => $validatedData['take_goal'],
            'give_goal' =>  $validatedData['give_goal'],
            'image' => $validatedData['image'] ?? null,
        ]);


        $match->save();

        return redirect()->route('matches.index')->with('success', 'Match added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $all_matches = Match::orderBy('created_at', 'desc')->paginate(6);
        $all_matches = Match::all();

        return view("frontend.matches", compact('all_matches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $all_players = Players::all();
        $match = Match::findOrFail($id);
        return view('admin.matches.edit', compact('match', 'all_players')); 
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
        $validatedData = $request->validate([
            'vs_team_name' => 'required|string|max:255',
            'place' => 'required|string|max:255',
            'datetime' => 'required|date_format:Y-m-d\TH:i',
            'take_goal' => 'required|string|max:10',
            'give_goal' => 'required|string|max:10',
            'image' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $match = Match::findOrFail($id);

        // Update match
        $match->score_player = $request->score_player;
        $match->vs_team_name = $validatedData['vs_team_name'];
        $match->place = $validatedData['place'];
        $match->datetime = $validatedData['datetime'];
        $match->give_goal = $validatedData['give_goal'];
        $match->take_goal = $validatedData['take_goal'];

        if ($request->hasFile('image')) { 
            $imagePath = $request->file('image')->store('matches', 'public');    
            $validatedData['image'] = $imagePath;
        }

        $match->save();

        return redirect()->route('matches.index')->with('success', 'Match updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Match :: findorFail($id);
        if( $match->image ){
            Storage::disk('public')->delete($match->image);
        }

        $match->delete();
        return redirect()->route('matches.index')->with('success'. 'Match deleted successfully.');
    }
}
