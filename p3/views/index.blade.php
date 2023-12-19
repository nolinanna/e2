@extends('templates/master')

@section('content')
    @if ($app->errorsExist())
        <div class='container text-center'>
            <ul class='error alert alert-danger'>
                @foreach ($app->errors() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($choice)
        <div class='results container text-center'>
            You chose <font color=#ff70ad>{{ $choice }}</font> and your opponent chose <font color=#ff70ad>
                {{ $computer }}</font>.

            @if ($result == 'win')
                <div class='win'>You survive.</div>
            @elseif($result == 'tie')
                <div class='tie'>You tied.</div>
            @else
                <div class='lose'>You are eliminated.</div>
            @endif

            <p>
                <a href='/history'>Game History</a>
            </p>
        </div>
    @endif

    <form method='POST' action='/process'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-sm text-center'>
                    <input type='radio' name='choice' value='rock' id='rock'>
                    <label for='rock'><img src='/images/rockpink.png' class='img-fluid'></label>
                    <p class='picks'><b class='highlight'>Rock</b> beats Scissors</p>
                </div>
                <div class='col-sm text-center'>
                    <input type='radio' name='choice' value='scissors' id='scissors'>
                    <label for='scissors'><img src='/images/scissorpink.png' class='img-fluid'></label>
                    <p class='picks'><b class='highlight'>Scissors</b> beats Paper</p>
                </div>
                <div class='col-sm text-center'>
                    <input type='radio' name='choice' value='paper' id='paper'>
                    <label for='paper'><img src='/images/paperpink.png' class='img-fluid'></label>
                    <p class='picks'><b class='highlight'>Paper</b> beats Rock</p>
                </div>
            </div>
            <div class='row'>
                <div class='text-center'>
                    <button type='submit'>
                        SHOOT
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection
