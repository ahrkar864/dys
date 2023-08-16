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
                        <form class="form-horizontal form-material mx-2" method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Score Players*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="score_players" class="form-control ps-0 form-control-line" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Vs Team Name*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="vs_team_name" class="form-control ps-0 form-control-line" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Place*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="place" class="form-control ps-0 form-control-line" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Stadium*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="stadium" class="form-control ps-0 form-control-line" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Time*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="time" class="form-control ps-0 form-control-line" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Result*</label>
                                <div class="col-md-12">
                                    <input type="text"
                                        name="result" class="form-control ps-0 form-control-line" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="player col-md-12 mb-0">Vs Team Logo Photo*</label>
                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control-file">
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->

@endsection