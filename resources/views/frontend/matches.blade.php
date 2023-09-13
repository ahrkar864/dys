@extends('layouts.frontend_layouts.index')

@section('content')


    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
        <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mx-auto text-center">
          <h1 class="text-white">Matches</h1>
          <p>We Play By Heart.</p>
        </div>
      </div>
        </div>
    </div>
    {{-- @foreach ($all_matches as $matches) --}}
        <div class="container">
            

            <div class="row">
            <div class="col-lg-12">
                
                <div class="d-flex team-vs">
                <span class="score">4-1</span>
                <div class="team-1 w-50">
                    <div class="team-details w-100 text-center">
                    <img src="images/logo_1.png" alt="Image" class="img-fluid">
                    <h3>LA LEGA <span>(win)</span></h3>
                    <ul class="list-unstyled">
                        <li></li>
                    </ul>
                    </div>
                </div>
                <div class="team-2 w-50">
                    <div class="team-details w-100 text-center">
                    <img src="images/logo_2.png" alt="Image" class="img-fluid">
                    <h3>JUVENDU <span>(loss)</span></h3>
                    <ul class="list-unstyled">
                        <li>Macauly Green (3)</li>
                        <li>Arham Stark (8)</li>
                        <li>Stephan Murillo (9)</li>
                        <li>Ned Ritter (5)</li>
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
                                        </div>
                                        <div>
                                        <span class="vs"><span>VS</span></span>
                                        </div>
                                        <div class="team-2 text-center">
                                        <img class="site-logo-img" src="{{ asset('storage/' . $matches->image) }}" alt="Image">
                                        <h3>{{ $matches->vs_team_name }}</h3>
                                        </div>
                                    </div>
                                    </div>
                                </div>
    
                                <div class="text-center widget-vs-contents mb-4">
                                    <h4>World Cup League</h4>
                                    <p class="mb-5">
                                    <span class="d-block">December 20th, 2020</span>
                                    <span class="d-block">9:30 AM GMT+0</span>
                                    <strong class="text-primary">New Euro Arena</strong>
                                    </p>
    
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div>No matches found.</div>
                    @endif

                </div>

            </div>
        </div>
    {{-- @endforeach --}}
    
@endsection