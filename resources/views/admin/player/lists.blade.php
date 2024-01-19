@extends('layouts.admin_layouts.index')

@section('content')
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Player Table</h3>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <div class="text-end upgrade-btn">
                        <a href="{{ route('players.create') }}"
                            class="btn btn-primary d-none d-md-inline-block text-white">Add new player</a>
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
        <div class="container-fluid">
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
                                                <td style="width: 80%;">{{ $item->name }}</td>
                                                <td style="width: 20%;">
                                                    <a href="{{ route('players.show', $item->id) }}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route('players.edit', $item->id) }}" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i> </a>
                                                    <a href="{{ route('playersdetails', $item->id ) }}" class="btn btn-sm btn-dark" target="_blank"><i class="fas fa-link"></i></a> 
                                                    <a href="{{ route('players.destroy', $item->id) }}"
                                                        onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this player?')){ document.getElementById('delete-form-{{ $item->id }}').submit(); }"
                                                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </a>
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
                        {{ $all_players->links(); }}                  
                    </div>
                </div>
            </div>
        </div>
@endsection