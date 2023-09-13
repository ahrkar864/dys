@extends('layouts.admin_layouts.index')

@section('content')
    <!-- Edit Player Form -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Player</h4>
                        <form class="form-horizontal form-material" method="POST" action="{{ route('players.update', $player->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Name -->
                            <div class="form-group">
                                <label class="player col-md-12">Name*</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $player->name) }}" >
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Position -->
                            <div class="form-group">
                                <label class="player col-md-12">Position(s)*</label>
                                <div class="col-md-12">
                                    @foreach ($playerPositions as $position)
                                        <div class="form-check col-md-3">
                                            <input type="checkbox" name="positions[]" value="{{ $position }}" class="form-check-input @error('positions') is-invalid @enderror"
                                                {{ in_array($position, old('positions', $player->positions ?? [])) ? 'checked' : '' }}>
                                            <label class="form-check-label">{{ $position }}</label>
                                        </div>
                                    @endforeach
                                    @error('positions')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>                             
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group">
                                <label class="player col-md-12">Phone Number*</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" class="form-control ps-0 form-control-line @error('phone') is-invalid @enderror" value="{{ old('phone', $player->phone) }}" >
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- About Player -->
                            <div class="form-group">
                                <label class="player col-md-12">About Player</label>
                                <div class="col-md-12">
                                    <textarea name="description" class="form-control ps-0 form-control-line @error('description') is-invalid @enderror" rows="5" >{{ old('description', $player->description) }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- No -->
                            <div class="form-group">
                                <label class="player col-md-12">Shirt No*</label>
                                <div class="col-md-12">
                                    <input type="text" name="no" class="form-control" value="{{ old('no', $player->no) }}" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="player col-md-12">Height(by meters)*</label>
                                <div class="col-md-12">
                                    <input type="text" name="height" class="form-control ps form-control-line  @error('height') is-invalid @enderror" value="{{ old('height', $player->height) }}" >
                                    @error('height')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="player col-md-12 mb-0" for="dob">Date of Birth*</label>
                                <div class="col-md-12">
                                    <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" placeholder="Select date of birth"
                                           value="{{ old('dob', $player->dob ?? '') }}">
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label class="player col-md-12 mb-0" for="preferred_foot">Preferred Foot*</label>
                                <div class="col-md-12">
                                    <select name="preferred_foot" class="form-control">
                                        <option value="left" {{ old('preferred_foot', $player->preferred_foot) === 'left' ? 'selected' : '' }}>Left</option>
                                        <option value="right" {{ old('preferred_foot', $player->preferred_foot) === 'right' ? 'selected' : '' }}>Right</option>
                                    </select>
                                    @error('preferred_foot')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="player col-md-12 mb-0">Image</label>
                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                                    <div>
                                        <strong>Current Image:</strong>
                                        @if ($player->image)
                                            <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}" width="80">    
                                        @else
                                            No Image
                                        @endif

                                        @error('image')
                                        <p class="danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                        @enderror
                                        
                                    </div>  
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" type="submit">Update Player</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
