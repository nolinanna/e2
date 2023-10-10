<?php

#   Setup
//  Rolls for initiative
$first = rand(1,6);
$second = rand(1,6);

//  Turns
$tied = "There was no tie.";
$currentPlayer = "";
$otherPlayer = "";

#   Step 1. Determine Who Goes First
//  If rolls tie, then re-roll. If rolls don't tie, move on to evaluate which is greater.
//  note to self: do-while only loops if it evaluates as true. 
do {
    if ($first == $second) {
        $tied = "Players tied and rolled again.";
        $first = rand(1, 6);
        $second = rand(1, 6);
    }
} while ($first == $second); 

if ($first > $second) {
    $currentPlayer = "Player 1";
    $otherPlayer = "Player 2";
} else {
    $currentPlayer = "Player 2";
    $otherPlayer = "Player 1";
}

#   Step 2. Roll for turns. 
//  Player Scores
$player1 = [];
$player2 = [];

//  Rolling Dice
$firstRoll = [];

for ($i = 0; $i < 3; $i++) {
    $firstRoll[] = rand(1, 6);
}
        
$secondRoll = [];

for ($i = 0; $i < 2; $i++) {
    $secondRoll[] = rand(1, 6);
}
        
for ($turn = 1; $turn <= 2; $turn++) {
    $maxOne = max($firstRoll);
    $maxTwo = max($secondRoll);
    $maxThree = rand(1, 6);

    $round = [$maxOne, $maxTwo, $maxThree];

    if ($turn == 1) {
        $player1 = array_sum($round);
    } else {
        $player2 = array_sum($round);
    } 
}

#   Step 3. Determine Winner

$win = "";

if ($player1 > $player2) {
    $win = $currentPlayer;
} elseif ($player2 > $player1) {
    $win = $otherPlayer;
} else {
    $win = "tied";
}

require 'index-view.php';