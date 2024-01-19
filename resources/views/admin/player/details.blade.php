@extends('layouts.admin_layouts.index')

@section('content')

<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Player Details</h3>
            <div class="d-flex align-items-center">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">View players details</h3>
                        <a href="{{ route('players.index') }}" class="btn btn-primary">Go Back to Players List</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-pimary">
                        <tbody>
                            <tr>
                                <th style="width: 200px;">Name</th>
                                <td>{{ $player->name }}</td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Position(s)</th>
                                <td>
                                    @foreach ($player->positions as $key => $item)
                                    {{ $item }}
                                    @if ($key < count($player->positions) - 1)
                                    /
                                    @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Phone Number</th>
                                <td>{{ $player->phone }}</td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Shirt No</th>
                                <td>
                                    {{ $player->no }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Height</th>
                                <td>
                                    @php
                                        function convertMetersToFeetAndInches($meters) {
                                            $feet = floor($meters * 3.28084);
                                            $inches = round(($meters * 39.3701) - ($feet * 12));
                                            return "$feet ft $inches in";
                                        }
                                    @endphp
                                    {{ $player->height }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Date of Birth</th>
                                <td>
                                    {{ $player->dob }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Preferred Foot</th>
                                <td>
                                    {{ $player->preferred_foot }}
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 200px;">Image</th>
                                <td>
                                    @if(!empty($player->image) && strpos($player->image, 'http') == 0)
                                    <img src="{{ asset($player->image) }}" alt="Image" class="img-fluid">
                                @elseif (!empty($player->image))
                                    <img src="{{ asset('storage/' . $player->image) }}" alt="Image" class="img-fluid">
                                @else
                                    <a href="{{ route('playersdetails', $all_player->id) }}"><img src="{{ asset('storage/images.jpg') }}" alt="No Image" class="img-fluid"></a>
                                @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection()