@extends('layouts.admin_layouts.index')

@section('content')

    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Profile</h3>
                <div class="d-flex align-items-center">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" method="POST" action="{{ route('profile.store')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Football Club Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" placeholder="{{ $all_profile_club_informations->name }}"
                                            class="form-control ps-0 form-control-line @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" placeholder="{{ $all_profile_club_informations->email }}" class="form-control ps-0 form-control-line @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Address</label>
                                    <div class="col-md-12">
                                        <input type="text" name="address" placeholder="{{ $all_profile_club_informations->address }}" class="form-control ps-0 form-control-line @error('address') is-invalid @enderror" value="{{ old('address') }}">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Football Club Caption</label>
                                    <div class="col-md-12">
                                        <input type="text" name="caption" placeholder="{{ $all_profile_club_informations->caption }}"
                                            class="form-control ps-0 form-control-line @error('caption') is-invalid @enderror" value="{{ old('caption') }}">
                                        @error('caption')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" placeholder="{{ $all_profile_club_informations->phone }}"
                                        class="form-control ps-0 form-control-line @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Home Image</label>
                                    <div class="col-md-12">
                                        <input type="file"
                                            name="coverphoto" class="form-control ps-0 form-control-line @error('coverphoto') is-invalid @enderror">
                                        @error('coverphoto')
                                            <p class="danger" role="alert" style="color:red;">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                         @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Logo Image</label>
                                    <div class="col-md-12">
                                        <input type="file" name="logophoto"
                                            class="form-control ps-0 form-control-line @error('logophoto') is-invalid @enderror">
                                        @error('logophoto')
                                            <p class="danger" role="alert" style="color: red;">
                                                <strong>{{ $message }}</strong>
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Facebook Link</label>
                                    <div class="col-md-12">
                                        <input type="text" name="facebooklink" placeholder="{{ $all_profile_club_informations->facebook_link }}"
                                        class="form-control ps-0 form-control-line @error('facebooklink') is-invalid @enderror" value="{{ old('facebooklink') }}">
                                        @error('facebooklink')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Telegram Link</label>
                                    <div class="col-md-12">
                                        <input type="text" name="telegramlink" placeholder="{{ $all_profile_club_informations->telegram_link }}"
                                        class="form-control ps-0 form-control-line @error('telegramlink') is-invalid @enderror" value="{{ old('telegramlink') }}">
                                        @error('telegramlink')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Youtube Link</label>
                                    <div class="col-md-12">
                                        <input type="text" name="youtubelink" placeholder="{{ $all_profile_club_informations->youtube_link }}"
                                        class="form-control ps-0 form-control-line @error('youtubelink') is-invalid @enderror">
                                        @error('youtubelink')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Copyright</label>
                                    <div class="col-md-12">
                                        <input type="text" name="copyright" placeholder="{{ $all_profile_club_informations->copyright }}"
                                        class="form-control ps-0 form-control-line">
                                        @error('copyright')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">About Caption</label>
                                    <div class="col-md-12">
                                        <input type="text" name="aboutcaption" placeholder="{{ $all_profile_club_informations->about_caption }}"
                                        class="form-control ps-0 form-control-line @error('aboutcaption') is-invalid @enderror">
                                        @error('aboutcaption')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Matches Caption</label>
                                    <div class="col-md-12">
                                        <input type="text" name="matchescaption" placeholder="{{ $all_profile_club_informations->matches_caption }}"
                                        class="form-control ps-0 form-control-line @error('matchescaption') is-invalid @enderror">
                                        @error('matchescaption')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Blogs Caption</label>
                                    <div class="col-md-12">
                                        <input type="text" name="blogscaption" placeholder="{{ $all_profile_club_informations->blogs_caption }}"
                                        class="form-control ps-0 form-control-line @error('blogscaption') is-invalid @enderror">
                                        @error('blogscaption')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                         @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Players Caption</label>
                                    <div class="col-md-12">
                                        <input type="text" name="playerscaption" placeholder="{{ $all_profile_club_informations->players_caption }}"
                                        class="form-control ps-0 form-control-line @error('playerscaption') is-invalid @enderror">
                                        @error('playerscaption')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">About</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" name="description" placeholder="{{ $all_profile_club_informations->description }}" class="form-control ps-0 form-control-line @error('description') is-invalid @enderror"></textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            <button class="btn btn-primary" type="submit">Update Club information</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
