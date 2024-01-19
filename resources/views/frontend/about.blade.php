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
                <h1 class="text-white">{{ strtoupper($all_profile_club_information->about_caption) }}</h1>
              </div>
            </div>
        </div>
    </div>
    
    <div class="site-section first-section">
        <div class="container">
        <div class="row">
            <div class="col-md-12 blog-content">
                <p class="lead">{{ $all_profile_club_information->description }}</p>
            </div>
        </div>
        </div>
    </div>
@endsection