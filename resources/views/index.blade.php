@extends('master')

@section('content')

<h2>Recent videos</h2>

@forelse ($videos as $video)

    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $video->title }}</h3>
            </div>
            <div class="panel-body">
                video element goes here
            </div>
        </div>
    </div>

@empty

    <p class="text-center">No recent videos uploaded</p>

@endforelse

@endsection