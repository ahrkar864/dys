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
            <div class="col-lg-5 ml-auto">
                <h1 class="text-white">
                {{ $all_profile_club_information->name }}
                </h1>
                <p>{{ $all_profile_club_information->caption }}</p>
                <p>
                <a href="{{ route('about') }}" class="btn btn-primary py-3 px-4 mr-3">More About Details</a>
                </p>
            </div>
            </div>
        </div>
    </div>

    {{-- <div class="hero overlay" style="background-image: url(
    @if (!empty($lastMatch->image) && strpos($lastMatch->image, 'http') === 0)
        '{{ asset($lastMatch->image) }}'
    @elseif (!empty($lastMatch->image))
        '{{ asset('storage/' . $lastMatch->image) }}'
    @else
        '{{ asset('storage/images.jpg') }}'
    @endif
    );"> --}}


    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="d-flex team-vs">
            <span class="score">{{ $lastMatch->take_goal }} - {{ $lastMatch->give_goal }}</span>
            <div class="team-1 w-50">
                <div class="team-details w-100 text-center">
                <img src="{{ asset('dashboard/assets/images/dys.jpg') }}" alt="Image" class="img-fluid" style="width:50px; border-radius: 50px;">
                <h3>Dagon Youth Star</h3>
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
                        <img style="width:50px; border-radius: 50px;" src="{{ asset($lastMatch->image) }}" alt="Image" class="img-fluid" >
                    @elseif (!empty($lastMatch->image))
                        <img style="width:50px; border-radius: 50px;" src="{{ asset('storage/' . $lastMatch->image) }}" alt="Image" class="img-fluid">
                    @else
                        <img style="width:50px; border-radius: 50px;" src="{{ asset('storage/images.jpg') }}" alt="Image" class="img-fluid">
                    @endif
                <h3>{{ $lastMatch->vs_team_name; }}</h3>
                <ul class="list-unstyled">
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    {{-- <div class="latest-news">
        <div class="container">
        <div class="row">
            <div class="col-12 title-section">
            <h2 class="heading">Latest News</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-4">
            <div class="post-entry">
                <a href="#">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="caption">
                <div class="caption-inner">
                    <h3 class="mb-3">Romolu to stay at Real Nadrid?</h3>
                    <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                        <img src="images/person_1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Mellissa Allison</h4>
                        <span>May 19, 2020 &bullet; Sports</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="post-entry">
                <a href="#">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="caption">
                <div class="caption-inner">
                    <h3 class="mb-3">Kai Nets Double To Secure Comfortable Away Win</h3>
                    <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                        <img src="images/person_1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Mellissa Allison</h4>
                        <span>May 19, 2020 &bullet; Sports</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="post-entry">
                <a href="#">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                </a>
                <div class="caption">
                <div class="caption-inner">
                    <h3 class="mb-3">Dogba set for Juvendu return?</h3>
                    <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                        <img src="images/person_1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h4>Mellissa Allison</h4>
                        <span>May 19, 2020 &bullet; Sports</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div> --}}

    {{-- <div class="site-section bg-dark">
        <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <div class="widget-next-match">
                <div class="widget-title">
                <h3>Next Match</h3>
                </div>
                <div class="widget-body mb-3">
                <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                        <img src="images/logo_1.png" alt="Image">
                        <h3>Football League</h3>
                    </div>
                    <div>
                        <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                        <img src="images/logo_2.png" alt="Image">
                        <h3>Soccer</h3>
                    </div>
                    </div>
                </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                <h4>Daily match</h4>
                <p class="mb-5">
                    <span class="d-block">December 20th, 2020</span>
                    <span class="d-block">6:00 AM</span>
                    <strong class="text-primary">Yangon , Alon</strong>
                </p>

                <div id="date-countdown2" class="pb-1"></div>
                </div>
            </div>
            </div>
            <div class="col-lg-6">

            <div class="widget-next-match">
                <table class="table custom-table">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Previous Matches</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>PTS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td><strong class="text-white">Football League</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                    </tr>
                </tbody>
                </table>
            </div>

            </div>
        </div>
        </div>
    </div> --}}

    {{-- <div class="site-section">
        <div class="container">
        <div class="row">
            <div class="col-6 title-section">
            <h2 class="heading">Videos</h2>
            </div>
            <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
            </div>
        </div>


        <div class="owl-4-slider owl-carousel">
            <div class="item">
            <div class="video-media">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                    <span class="icon-play"></span>
                </span>
                <div class="caption">
                    <h3 class="m-0">Dogba set for Juvendu return?</h3>
                </div>
                </a>
            </div>
            </div>
            <div class="item">
            <div class="video-media">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                    <span class="icon-play"></span>
                </span>
                <div class="caption">
                    <h3 class="m-0">Kai Nets Double To Secure Comfortable Away Win</h3>
                </div>
                </a>
            </div>
            </div>
            <div class="item">
            <div class="video-media">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                    <span class="icon-play"></span>
                </span>
                <div class="caption">
                    <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                </div>
                </a>
            </div>
            </div>

            <div class="item">
            <div class="video-media">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                    <span class="icon-play"></span>
                </span>
                <div class="caption">
                    <h3 class="m-0">Dogba set for Juvendu return?</h3>
                </div>
                </a>
            </div>
            </div>
            <div class="item">
            <div class="video-media">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                    <span class="icon-play"></span>
                </span>
                <div class="caption">
                    <h3 class="m-0">Kai Nets Double To Secure Comfortable Away Win</h3>
                </div>
                </a>
            </div>
            </div>
            <div class="item">
            <div class="video-media">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                    <span class="icon-play"></span>
                </span>
                <div class="caption">
                    <h3 class="m-0">Romolu to stay at Real Nadrid?</h3>
                </div>
                </a>
            </div>
            </div>

        </div>

        </div>
    </div> --}}

    <div class="container site-section">
        <div class="row">
        <div class="col-6 title-section">
            <h2 class="heading">Our Blog</h2>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6">
            <div class="custom-media d-flex">
            <div class="img mr-4">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
                <span class="meta">May 20, 2020</span>
                <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                <p><a href="#">Read more</a></p>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="custom-media d-flex">
            <div class="img mr-4">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
                <span class="meta">May 20, 2020</span>
                <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
                <p><a href="#">Read more</a></p>
            </div>
            </div>
        </div>
        </div>
    </div>

@endsection
