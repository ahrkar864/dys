@extends('layouts.admin_layouts.index')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Profile</h3>
                <div class="d-flex align-items-center">
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
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="mt-4"> <img src="{{ asset('dashboard/assets/images/dys.jpg   ') }}"
                                class="rounded-circle" width="150" />
                            <h4 class="card-title mt-2">Dagon Youth Star Football Club  </h4>
                            <h6 class="card-subtitle">We are DYS(since 2017)</h6>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material mx-2" method="POST" action="{{ route('blogs.store')}}" enctype="myltipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Email</label>
                                <div class="col-md-12">
                                    <input type="email" name="email" placeholder="" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Address</label>
                                <div class="col-md-12">
                                    <input type="text" name="address" placeholder="" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Football Club Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Football Club Caption</label>
                                <div class="col-md-12">
                                    <input type="text" name="caption" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Home Image</label>
                                <div class="col-md-12">
                                    <input type="file"
                                        name="coverimage" class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Logo Image</label>
                                <div class="col-md-12">
                                    <input type="file" name="logoimage"
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Facebook Link</label>
                                <div class="col-md-12">
                                    <input type="text" name="facebooklink" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Telegram Link</label>
                                <div class="col-md-12">
                                    <input type="text" name="telegramlink" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Youtube Link</label>
                                <div class="col-md-12">
                                    <input type="text" name="youtubelink" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Copyright</label>
                                <div class="col-md-12">
                                    <input type="text" name="copyright" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">About Caption</label>
                                <div class="col-md-12">
                                    <input type="text" name="aboutcaption" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Matches Caption</label>
                                <div class="col-md-12">
                                    <input type="text" name="matchescaption" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Blogs Caption</label>
                                <div class="col-md-12">
                                    <input type="text" name="blogscaption" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Players Caption</label>
                                <div class="col-md-12">
                                    <input type="text" name="playerscaption" placeholder=""
                                        class="form-control ps-0 form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">About</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="description" placeholder="" class="form-control ps-0 form-control-line"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Edit Club information</button>
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

@endsection()
