<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_profile_club_informations = Profile::first();
        return view("admin.profile", compact('all_profile_club_informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'nullable|string|max:255',
            'email' => [ 'nullable','email',Rule::unique('users', 'email')->ignore(auth()->id()),],
            'address' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:255',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'coverphoto' => 'mimes:jpeg,jpg,png,gif',
            'logophoto' => 'mimes:jpeg,jpg,png,gif',
            'facebooklink' => 'nullable|url',
            'telegramlink' => 'nullable|url',
            'youtubelink' => 'nullable|url',
            'copyright' => 'nullable|string|max:100',
            'aboutcaption' => 'nullable|string|max:255',
            'matchescaption' => 'nullable|string|max:255',
            'blogscaption' => 'nullable|string|max:255',
            'playerscaption' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $profile = Profile::firstOrNew();
        $profile->name = $validatedData['name'];
        $profile->email = $validatedData['email'];
        $profile->address = $validatedData['address'];
        $profile->caption = $validatedData['caption'];
        $profile->phone = $validatedData['phone'];
        $profile->facebook_link = $validatedData['facebooklink'];
        $profile->telegram_link = $validatedData['telegramlink'];
        $profile->youtube_link = $validatedData['youtubelink'];
        $profile->copyright = $validatedData['copyright'];
        $profile->about_caption = $validatedData['aboutcaption'];
        $profile->matches_caption = $validatedData['matchescaption'];
        $profile->blogs_caption = $validatedData['blogscaption'];
        $profile->players_caption = $validatedData['playerscaption'];
        $profile->description = $validatedData['description'];
        
        if ($request->hasFile('coverphoto')) {
            $coverphotoPath = $request->file('coverphoto')->store('coverphoto','public');
            $validatedData['coverphoto'] = $coverphotoPath;
            $profile->cover_photo = $validatedData['coverphoto'];
        }

        if ($request->hasFile('logophoto')) {
            $logophotoPath = $request->file('logophoto')->store('logophoto','public');
            $validatedData['logophoto'] = $logophotoPath;
            $profile->logo_photo = $validatedData['logophoto'];
        }

        $profile->save();

        return redirect()->route('profile.index')->with('success','Club Information update successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $all_profile_club_informations = Profile::all()->first();
        // return view('frontend.home', compact('all_profile_club_informations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
