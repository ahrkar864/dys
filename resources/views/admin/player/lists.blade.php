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
                        <a href="{{ route('players.create') }}"
                            class="btn btn-success d-none d-md-inline-block text-white">Add new player</a>
                    </div>
                </div>

                @if(session('success'))
                    <div class="col-6 offset-3 alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

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
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_players as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                {{-- <td>
                                                    @foreach ($item->positions as $key => $value)
                                                        {{ $value }}
                                                        @if ($key < count($item->positions) - 1)
                                                        /
                                                        @endif
                                                    @endforeach
                                                    {{-- {{ $item->positions }} --}}
                                                {{-- <td>
                                                    @if($item->image)
                                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" width="50">
                                                    @else
                                                        No Image
                                                    @endif
                                                </td> --}}
                                                <td>
                                                    {{-- <a href="{{ route('playersdetails', $all_player->id)}}" class="btn btn-success"><i class="fas fa-eye"></i></a> --}}
                                                    <a href="" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('players.edit', $item->id) }}" class="btn btn-default"> <i class="fas fa-edit"></i> </a> 
                                                    <a href="{{ route('players.destroy', $item->id) }}"
                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this player?')){ document.getElementById('delete-form-{{ $item->id }}').submit(); }"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i> </a>
                                                    <form id="delete-form-{{ $item->id }}" action="{{ route('players.destroy', $item->id) }}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr> 
                                        @endforeach       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        {{ $all_players->links('pagination.custom') }}
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