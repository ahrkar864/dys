@extends('layouts.admin_layouts.index')

@section('content')

    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Add Match</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" method="POST" action="{{ route('matches.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Score Players</label>
                                <div class="col-md-12">
                                    @foreach ($all_players as $item)
                                    <input type="checkbox" name="score_player[]" value="{{ $item->name }}" {{ in_array($item->name, old('score_player', $match->score_player ?? [])) ? 'checked' : '' }}><label>{{ $item->name }}</label><br>
                                    @endforeach
                                </div>
                            </div>                                                 
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Vs Team Name</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="vs_team_name" class="form-control ps-0 form-control-line @error('vs_team_name') is-invalid @enderror" value="{{ old('vs_team_name') }}">
                                    @error('vs_team_name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Place(stadium)*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="place" class="form-control ps-0 form-control-line @error('place') is-invalid @enderror" value="{{ old('place') }}">
                                    @error('place')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Date and Time*</label>
                                <div class="col-md-12">
                                    <input type="datetime-local" name="datetime" class="form-control ps-0 form-control-line @error('datetime') is-invalid @enderror" value="{{ old('datetime') }}">
                                    @error('datetime')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Take Goals</label>
                                <div class="col-md-12">
                                    <input type="text" name="take_goal" class="form-control ps-0 form-control-line @error('take_goal') is-invalid @enderror"  value="{{ old('take_goal') }}">
                                    @error('take_goal')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Give Goals</label>
                                <div class="col-md-12">
                                    <input type="text" name="give_goal" class="form-control ps-0 form-control-line @error('give_goal') is-invalid @enderror" value="{{ old('give_goal') }}">
                                    @error('give_goal')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Vs Team Logo Photo</label>
                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                                    @error('image')
                                        <p class="danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add Match</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

@endsection