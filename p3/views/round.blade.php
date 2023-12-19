@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <div class='container-fluid'>
        <div class='row'>
            <h2 class='text-center'>Round Details for Play #{{ $round['id'] }}</h2>
            <p class='text-center'><a href='/history'>Return to Round Recap</a></p>

            <div class='col-sm'></div>
            <div class='col-sm roundRecap'>
                <p>{{ $round['timestamp'] }}</p>
                <p>Player chose {{ $round['choice'] }}.</p>
                <p>Opponent chose {{ $round['computer'] }}.</p>

                @if ($round['result'] == 'tie')
                    Players <b class='highlight'>tied.</b>
                @elseif($round['result'] == 'win')
                    Player <b class='highlight'>survived.</b>
                @else
                    Player was <b class='highlight'>eliminated.</b>
                @endif
            </div>
            <div class='col-sm'></div>
        </div>
    </div>
@endsection
