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
          <h1 class="text-white">{{ ucwords(strtolower($all_profile_club_information->matches_caption)) }}</h1>
        </div>
      </div>
        </div>
    </div>
    {{-- @foreach ($all_matches as $matches) --}}
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                
                <div class="d-flex team-vs">
                <span class="score">{{ $lastMatch->take_goal }} - {{ $lastMatch->give_goal }}</span>
                <div class="team-1 w-50">
                    <div class="team-details w-100 text-center">
                    <img style="border-radius:50px;" src="{{ asset('dashboard/assets/images/dys.jpg') }}" alt="Image" class="img-fluid">
                    <h3>DYS</h3>
                    <ul class="list-unstyled">
                        @foreach ($lastMatch->score_player as $key => $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    </div>
                </div>
                <div class="team-2 w-50">
                    <div class="team-details w-100 text-center">
                    @if(!empty($lastMatch->image) && strpos($lastMatch->image, 'http') === 0)
                        <img style="border-radius:50px;" src="{{ asset($lastMatch->image) }}" alt="Image" class="img-fluid">
                    @elseif (!empty($lastMatch->image))
                        <img style="border-radius:50px;" src="{{ asset('storage/' . $lastMatch->image) }}" alt="Image" class="img-fluid">
                    @else
                        <img style="border-radius:50px;" src="{{ asset('storage/images.jpg') }}" alt="Image" class="img-fluid">
                    @endif
                    <h3>{{ $lastMatch->vs_team_name; }}</h3>
                    <ul class="list-unstyled">
                        <li></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="site-section bg-dark">
            <div class="container">
                <div class="row">
                <div class="col-12 title-section">
                    <h2 class="heading">Previous Matches</h2>
                    </div>
                    @if(isset($all_matches) && count($all_matches) > 0)
                        @foreach ($all_matches as $matches)
                        <div class="col-lg-6 mb-4">
                            <div class="bg-light p-4 rounded">
                                <div class="widget-body">
                                    <div class="widget-vs">
                                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                        <div class="team-1 text-center">
                                        <img class="site-logo-img" src="{{ asset('dashboard/assets/images/dys.jpg') }}" alt="Image">
                                        <h3>DYS</h3>
                                            <ul class="list-unstyled">
                                                @foreach ($matches->score_player as $key => $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach                             
                                            </ul>
                                        </div>
                                        <span class="vs"><span>VS</span></span>
                                        <div class="team-2 text-center">
                                            @if (!empty($matches->image) && strpos($matches->image, 'http') === 0)
                                                <img style="border-radius:50px;" src="{{ asset($matches->image) }}" alt="Image" class="site-logo-img">
                                            @elseif (!empty($matches->image))
                                                <img style="border-radius:50px;" src="{{ asset('storage/' . $matches->image) }}" alt="Image" class="site-logo-img">
                                            @else
                                                <img style="border-radius:50px;" src="{{ asset('storage/images.jpg') }}" alt="Image" class="site-logo-img">
                                            @endif
                                            <h3>{{ $matches->vs_team_name }}</h3>
                                            <ul class="list-unstyled">
                                                <li>.</li>
                                                <li>.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="text-center widget-vs-contents mb-4">
                                    <h4>{{ $matches->place }}</h4>
                                    <p class="mb-5">
                                        <strong class="text-primary">
                                            {{ \Carbon\Carbon::parse($matches->datetime)->format('F jS, Y') }}
                                        </strong>
                                    </p>                                   
                                </div>

                            </div>
                        </div>
                        @endforeach
                    @else
                        <div>No matches found.</div>
                    @endif

                </div>
                <div class="row justify-content-center">
                    <div class="text-center">
                        <div class="custom-pagination">
                            {{ $all_matches->links('pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- @endforeach --}}
    
@endsection