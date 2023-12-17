@extends('templates/master')

@section('title')
    Round History
@endsection

@section('content')
    <h2>Round History</h2>

    <ul class='rounds'>
        @foreach ($rounds as $round)
            <li><a href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>
        @endforeach
    </ul>

    <p><a href='/'>Return home</a></p>
@endsection
