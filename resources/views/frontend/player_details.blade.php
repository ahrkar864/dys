@extends('layouts.frontend_layouts.index')

@section('content')

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">{{ ucwords(strtolower($all_profile_club_information->players_caption)) }}</h1>
            </div>
        </div>
        </div>
    </div>
    
    <div class="site-section first-section">
        <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
            <p>
                @if(!empty($player->image) && strpos($player->image, 'http') == 0)
                    <img src="{{ asset($player->image) }}" alt="Image" class="img-fluid">
                @elseif (!empty($player->image))
                    <img src="{{ asset('storage/' . $player->image) }}" alt="Image" class="img-fluid">
                @else
                    <a href="{{ route('playersdetails', $all_player->id) }}"><img src="{{ asset('storage/images.jpg') }}" alt="No Image" class="img-fluid"></a>
                @endif
            </p>
            <div class="pt-5">
            <p class="lead">
                @foreach ($player->positions as $key => $item)
                    {{ $item }}
                    @if ($key < count($player->positions) - 1)
                    /
                    @endif
                @endforeach
            </p>
            <h3 class="mb-4">{{ $player->name }}</h3>
            {{-- <p>Categories:  <a href="#">HTML5</a>, <a href="#">Bootstrap 4</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p> --}}
            </div>
            </div>
            <div class="col-md-4 sidebar">
            <div class="sidebar-box">
                <div class="categories">
                <h3 class="text-uppercase">Categories</h3>
                <li><a href="#">Shirt Num<span>{{ $player->no }}</span></a></li>
                <li><a href="#">Phone Num<span>{{ $player->phone }}</span></a></li>
                @php
                    function convertMetersToFeetAndInches($meters) {
                        $feet = floor($meters * 3.28084);
                        $inches = round(($meters * 39.3701) - ($feet * 12));
                        return "$feet ft $inches in";
                    }
                @endphp
                <li><a href="#">Height<span>{{ $player->height }} m ({{ convertMetersToFeetAndInches($player->height) }})</span></a></li>
                <li><a href="#">Date of Birth<span>{{ $player->dob }}</span></a></li>
                <li><a href="#">Age <span>{{ $player->age }} </span></a></li>
                <li><a href="#">Preferred foot<span>{{ $player->preferred_foot }} </span></a></li>
                </div>
            </div>
            <div class="sidebar-box">
                <h3 class="text-uppercase">About The Payer</h3>
                <p>{{ $player->description }}</p>
            </div>

            </div>
        </div>
        </div>
    </div>
@endsection