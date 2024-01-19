@extends('layouts.admin_layouts.index')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Create Blog</h3>
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
            <div class="row">
                <!-- column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2" method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">title*</label>
                                    <input type="text" name="title" class="form-control ps-0 form-control-line @error('title') is-invalid  @enderror" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">About*</label>
                                    <input type="text" name="about" class="form-control ps-0 form-control-line @error('about') is-invalid @enderror" value="{{ old('about') }}">
                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Date*</label>
                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ old('date') }}">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Video Youtube link*</label>
                                    <input type="text" name="video" class="form-control ps-0 form-control-line @error('video') is-invalid @enderror" value="{{ old('video') }}">
                                    @error('video')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Description*</label>
                                    <textarea name="description" class="form-control ps-0 form-control-line @error('description') is-invalid @enderror" cols="30" rows="10">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">Add Blog</button>
                            </form>
                        </div>
                    </div>
                    <div class="pagination">
                    </div>
                </div>
            </div>
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