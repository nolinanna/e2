@extends('templates/master')

@section('title')
    Round History
@endsection

@section('content')
    <div class='container-fluid text-center'>
        <h2>Round History</h2>
        <p><a href='/'>Return home</a></p>

        <ul class='rounds'>
            @foreach ($rounds as $round)
                <li><a href='/round?id={{ $round['id'] }}'>Game #{{ $round['id'] }}</a></li>
            @endforeach
        </ul>

    </div>
@endsection
