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
                                <label class="col-md-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $player->name) }}" required>
                                </div>
                            </div>

                            <!-- Position -->
                            <div class="form-group">
                                <label class="col-md-12">Position</label>
                                <div class="col-md-12">
                                    <input type="text" name="position" class="form-control" value="{{ old('position', $player->position) }}" required>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $player->phone) }}" required>
                                </div>
                            </div>

                            <!-- About Player -->
                            <div class="form-group">
                                <label class="col-md-12">About Player</label>
                                <div class="col-md-12">
                                    <textarea name="description" class="form-control" rows="5" required>{{ old('description', $player->description) }}</textarea>
                                </div>
                            </div>

                            <!-- No -->
                            <div class="form-group">
                                <label class="col-md-12">No</label>
                                <div class="col-md-12">
                                    <input type="text" name="no" class="form-control" value="{{ old('no', $player->no) }}" required>
                                </div>
                            </div>

                            <!-- Height -->
                            <div class="form-group">
                                <label class="col-md-12">Height</label>
                                <div class="col-md-12">
                                    <input type="text" name="height" class="form-control" value="{{ old('height', $player->height) }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="col-md-12 mb-0">Image</label>
                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control-file">
                                    <div>
                                        <strong>Current Image:</strong>
                                        @if ($player->image)
                                            <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}" width="80">    
                                        @else
                                            No Image
                                        @endif
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
