@extends('layouts.admin_layouts.index')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Add players</h3>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" method="POST" action="{{ route('players.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Name*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="name" class="form-control ps-0 form-control-line @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12">Position(s)*</label>
                                <div class="col-md-12">
                                    @foreach ($playerPositions as $position)
                                        <div class="form-check col-md-3">
                                            <input type="checkbox" name="positions[]" value="{{ $position }}" class="form-check-input">
                                            <label class="form-check-label">{{ $position }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Phone Number*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="phone" class="form-control ps-0 form-control-line @error('phone') is-invalid @enderror" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">About Player*</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="description" class="form-control ps-0 form-control-line @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0" for="">Shirt No*</label>
                                <div class="col-md-12">
                                    <input type="text" name="no" class="form-control ps form-control-line @error('no') is-invalid @enderror" value="{{ old('no') }}">
                                    @error('no')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0" for="">Height(by meters)*</label>
                                <div class="col-md-12">
                                    <input type="text" name="height" class="form-control ps form-control-line  @error('height') is-invalid @enderror" value="{{ old('height') }}">
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
                                    <input type="date" name="dob" class="form-control" placeholder="Select date of birth">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0" for="preferred_foot">Preferred Foot*</label>
                                <div class="col-md-12">
                                    <select name="preferred_foot" class="form-control">
                                        <option value="left">Left</option>
                                        <option value="right">Right</option>
                                    </select>
                                </div>
                            </div>
                                                 
                            <div class="form-group">
                                <label class="player" for="col-md-12 mb-0">Image</label>
                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add Player</button>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

@endsection