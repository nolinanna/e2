<?php

session_start();

# Player's choice
$choice = $_POST['choice'];

# Computer's choice
$computer = ['rock', 'paper', 'scissors'][rand(0, 2)];

# Winning/Losing Conditions
if ($choice == $computer) {
    $outcome = 'You tied. Please try again.';
}

if ($choice == 'rock') {
    if ($computer == 'scissors') {
        $outcome = 'You win!';
    } elseif ($computer == 'paper') {
        $outcome = 'You lose.';
    }
}

if ($choice == 'paper') {
    if ($computer == 'rock') {
        $outcome = 'You win!';
    } elseif ($computer == 'scissors') {
        $outcome = 'You lose.';
    }
}

if ($choice == 'scissors') {
    if ($computer == 'paper') {
        $outcome = 'You win!';
    } elseif ($computer == 'rock') {
        $outcome = 'You lose.';
    }
}

$_SESSION['results'] = [
    'outcome' => $outcome,
    'computer' => $computer,
    'choice' => $choice
];

header('Location: index.php');