@extends('layouts.admin_layouts.index')

@section('content')
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Player Table</h3>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <div class="text-end upgrade-btn">
                        <a href="{{ route('matches.create') }}"
                            class="btn btn-success d-none d-md-inline-block text-white">Add Match</a>
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
                                            <th class="border-top-0">Score Player(s)</th>
                                            <th class="border-top-0">Vs Team Name</th>
                                            <th class="border-top-0">Place(Stadium)</th>
                                            <th class="border-top-0">Time(Date and Time)</th>
                                            <th class="border-top-0">Take Goals</th>
                                            <th class="border-top-0">Give Goals</th>
                                            <th class="border-top-0">Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_matches as $item)
                                        <tr>
                                            <td>
                                                {{-- @foreach($item->score_player as $key => $value)
                                                    {{ $value }}
                                                    @if ($key < count($item->score_player) - 1)
                                                    /
                                                    @endif
                                                @endforeach --}}
                                            </td>
                                            <td>{{ $item->vs_team_name }}</td>
                                            <td>{{ $item->place }}</td>
                                            <td>{{ $item->datetime }}</td>
                                            <td>{{ $item->take_goal }}</td>
                                            <td>{{ $item->give_goal }}</td>
                                            <td>
                                                @if($item->image)
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
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