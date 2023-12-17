@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>

    <ul>
        <li>Round ID: {{ $round['id'] }}</li>
        <li>Player's choice: {{ $round['choice'] }}</li>
        <li>Computer's choice: {{ $round['computer'] }}</li>

        @if ($round['result'] == 'tie')
            <li>Players tied.</li>
        @elseif($round['result'] == 'win')
            <li>Player wins!</li>
        @else
            <li>Player lost.</li>
        @endif

        <li>Time: {{ $round['timestamp'] }}</li>
    </ul>

    <p><a href='/history'>Return to Round Recap</a></p>
@endsection
