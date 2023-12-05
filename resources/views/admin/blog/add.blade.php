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
                <div class="col-md-6 col-4 align-self-center">
                    <div class="text-end upgrade-btn">
                        <a href="{{ route('blogs.create')}}"
                            class="btn btn-success d-none d-md-inline-block text-white">Add new Blog</a>
                    </div>
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
                                    <input type="text" name="title" class="form-control ps-0 form-control-line">
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">About*</label>
                                    <input type="text" name="about" class="form-control ps-0 form-control-line">
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Date*</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Video Youtube link*</label>
                                    <input type="text" name="video" class="form-control ps-0 form-control-line">
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