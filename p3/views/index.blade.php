@extends('templates/master')

@section('content')
    <h2>Instructions</h2>

    <p>Choose your hand and compare with your opponent.</p>

    <h3>How to win:</h3>
    <ul>
        <li>Rock beats scissors
        <li>Paper beats rock
        <li>Scissors beats paper
    </ul>

    <form method='POST' action='/process'>
        <input type='radio' name='choice' value='rock' id='rock'><label for='rock'>Rock</label>
        <input type='radio' name='choice' value='paper' id='paper'><label for='paper'>Paper</label>
        <input type='radio' name='choice' value='scissors' id='scissors'><label for='scissors'>Scissors</label>

        <button type='submit'>Shoot!</button>
    </form>
@endsection
