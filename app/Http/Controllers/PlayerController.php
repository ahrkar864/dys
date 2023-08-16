<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_players = Players::paginate(8);
        return view("admin.player.lists", compact('all_players'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $playerPositions = [
            'Goalkeeper',
            'Defender - Center Back',
            'Defender - Right Back',
            'Defender - Left Back',
            'Midfielder - Central Midfield',
            'Midfielder - Defensive Midfield',
            'Midfielder - Attacking Midfield',
            'Midfielder - Right Midfield',
            'Midfielder - Left Midfield',
            'Forward - Center Forward',
            'Forward - Striker',
            'Forward - Right Winger',
            'Forward - Left Winger',
            'Defender - Sweeper',
            'Defender - Wing-back',
            'Midfielder - Box-to-Box Midfield',
            'Midfielder - Wide Midfield'
        ];

        return view("admin.player.add", compact('playerPositions'));
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
            'name' => 'required|string|max:255',
            'positions' => 'required|array',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'description' => 'required|string',
            'no' => 'required|string|max:10',
            'height' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'dob' => 'required|date', 
            'preferred_foot' => 'required|in:left,right', 
            'image' => 'mimes:jpeg,jpg,png,gif'
        ]);
        if ($request->hasFile('image')) { 
            $imagePath = $request->file('image')->store('players', 'public');    
            $validatedData['image'] = $imagePath;
        }

        $player = new Players([
            'name' => $validatedData['name'],
            'positions' => $validatedData['positions'],
            'phone' => $validatedData['phone'],
            'description' => $validatedData['description'],
            'no' => $validatedData['no'],
            'height' => $validatedData['height'],
            'dob' => $validatedData['dob'],
            'preferred_foot' => $validatedData['preferred_foot'],
            'image' => $validatedData['image'] ?? null, // Use the image if uploaded, or set to null
        ]);
        $player->save();

        return redirect()->route('players.index')->with('success', 'Player added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $all_players = Players::paginate(6);

        return view("frontend.players", compact('all_players'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $playerPositions = [
            'Goalkeeper',
            'Defender - Center Back',
            'Defender - Right Back',
            'Defender - Left Back',
            'Midfielder - Central Midfield',
            'Midfielder - Defensive Midfield',
            'Midfielder - Attacking Midfield',
            'Midfielder - Right Midfield',
            'Midfielder - Left Midfield',
            'Forward - Center Forward',
            'Forward - Striker',
            'Forward - Right Winger',
            'Forward - Left Winger',
            'Defender - Sweeper',
            'Defender - Wing-back',
            'Midfielder - Box-to-Box Midfield',
            'Midfielder - Wide Midfield'
        ];
        $player = Players::findOrFail($id);

        return view('admin.player.edit', compact('player','playerPositions'));
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
            'name' => 'required|string|max:255',
            'positions' => 'required|array',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'description' => 'required|string',
            'no' => 'required|string|max:10',
            'height' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'dob' => 'required|date', 
            'preferred_foot' => 'required|in:left,right', 
            'image' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $player = Players::findOrFail($id);
    
        // Update player attributes
        $player->name = $validatedData['name'];
        $player->positions = $validatedData['positions'];
        $player->phone = $validatedData['phone'];
        $player->description = $validatedData['description'];
        $player->no = $validatedData['no'];
        $player->height = $validatedData['height'];
        $player->dob = $validatedData['dob'];
        $player->preferred_foot = $validatedData['preferred_foot'];
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) { 
            $imagePath = $request->file('image')->store('players', 'public');    
            $player->image = $imagePath;
        }
    
        // Save the changes
        $player->save();
    
        return redirect()->route('players.index')->with('success', 'Player updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Players ::findOrFail($id);
        if ($player->image) {
            Storage::disk('public')->delete($player->image);
        }
    
        $player->delete();

        return redirect()->route('players.index')
            ->with('success'. 'Player deleted successfully.');
    }

    public function details($id){

        $player = Players::findOrFail($id);

        return view('frontend.player_details', compact('player'));
    }
}
