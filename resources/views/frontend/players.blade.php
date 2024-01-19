@extends('layouts.frontend_layouts.index')

@section('content')
    <div class="hero overlay" style="background-image: url(
        @if (!empty($all_profile_club_information->cover_photo) && strpos($all_profile_club_information->cover_photo, 'http') === 0)
            '{{ asset($all_profile_club_information->cover_photo) }}'
        @elseif (!empty($all_profile_club_information->cover_photo))
            '{{ asset('storage/' . $all_profile_club_information->cover_photo) }}'
        @else
            '{{ asset('storage/images.jpg') }}'
        @endif
        );">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">{{ ucwords(strtolower($all_profile_club_information->players_caption)) }}</h1>
            </div>
        </div>
        </div>
    </div>

    <div class="container site-section">
        <div class="row">
        <div class="col-6 title-section">
            <h2 class="heading">All Players</h2>
        </div>
        </div>
        <div class="row">
            @foreach ($all_players as $all_player)
                <div class="col-lg-3 mb-4">
                    <div class="custom-media d-block">
                    <div class="player-img img mb-4">
                    @if (!empty($all_player->image) && strpos($all_player->image, 'http') === 0)
                        <a href="{{ route('playersdetails', $all_player->id) }}"><img src="{{ $all_player->image }}" alt="Image" class="img-fluid"></a>
                    @elseif (!empty($all_player->image))
                        <a href="{{ route('playersdetails', $all_player->id) }}"><img src="{{ asset('storage/' . $all_player->image) }}" alt="Image" class="img-fluid"></a>
                    @else
                        <a href="{{ route('playersdetails', $all_player->id) }}"><img src="{{ asset('storage/images.jpg') }}" alt="No Image" class="img-fluid"></a>
                    @endif
                    
                    </div>
                    <div class="text">
                        <h3><a href="{{ route('playersdetails', $all_player->id)}}">{{ $all_player->name }}</a></h3>
                        <span class="meta">
                            @foreach ($all_player->positions as $key => $item)
                                {{ $item }}
                                @if ($key < count($all_player->positions) - 1)
                                /
                                @endif
                            @endforeach
                        </span>
                        <p><a href="{{ route('playersdetails', $all_player->id)}}">View Details</a></p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
        <div class="text-center">
            <div class="custom-pagination">
                {{ $all_players->links('pagination.custom') }}
            </div>
        </div>
        </div>
    </div>
@endsection