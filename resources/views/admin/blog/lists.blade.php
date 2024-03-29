@extends('layouts.admin_layouts.index')

@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Blog Table</h3>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <div class="text-end upgrade-btn">
                        <a href="{{ route('blogs.create')}}"
                            class="btn btn-primary d-none d-md-inline-block text-white">Add new Blog</a>
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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table user-table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">title</th>
                                            <th class="border-top-0">About</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Video Youtube Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_blogs as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->about }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->video }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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