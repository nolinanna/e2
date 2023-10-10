<?php

#Array of Strings
// $moves = ['rock', 'paper', 'scissors']; 

#Array of numbers
// $strawLenghts = [2,2,2,2,2,2,1];

#Array of mixed types
// $mixed = ['rock', 1, .04, true]; 

#Defining rand function, which can be used to choose random key from array
// $randomNumber = rand(0, 2);

// var_dump($randomNumber); Checking that randomnumber is choosing keys correctly 

#Defining move so that it utilizes rand to select a random key from moves array
// $move = $moves[$randomNumber];

// var_dump($move); seeing the output of the move

#       Associative Array Examples
#       Allows one to define own keys (position number) in elements of array

// $coinValues = [
//     'penny' => .01, 
//     'nickel' => .05, 
//     'dime' => .10, 
//     'quarter' => .25
// ];

// var_dump($coinValues['quarter']); displayed the assigned quarter value

// $coinCounts = [
//     'penny' => 100,
//     'nickel' => 25,
//     'dime' => 100,
//     'quarter' => 34
// ];

#       Multidimensional Array Example
#       You can combine with associative arrays

// $total = 0;

#       Coins WITH associative array
// $coins = [
//     'penny' => ['count' => 100, 'value' => .01],
//     'nickel' => ['count' => 25, 'value' => .05],
//     'dime' => ['count' => 100, 'value' => .10],
//     'quarter' => ['count' => 34, 'value' => .25],
//     'halfDollar' => ['count' => 10, 'value' => .50]
// ];

// foreach($coins as $coin => $info){
//     $total = $total + ($info['count'] * $info['value']);
// };

#       Coins WITHOUT associative array
// $coins = [
//     'penny' => [100, .01],
//     'nickel' => [25, .05],
//     'dime' => [100, .10],
//     'quarter' => [34, .25]
// ];

// foreach($coins as $coin => $info){
//     $total = $total + ($info[0] * $info[1]);
// };

#       Foreach loop
#       Iterates through array and calculates

// foreach($coinCounts as $coin => $count) {
//     $total = $total + ($count * $coinValues[$coin]);
// }

// var_dump($total);

#       Other Functions

//      asort (array sort) sorts an array by lowest values to highest value
// asort($coinCounts); 

//      arsort sorts an array by highest value to lowest value
// arsort($coinCounts); 

//      ksort (key sort) sorts key alphabetically
// ksort($coinCounts);

//      krsort sorts keys reverse alphabetically 
// krsort($coinCounts);

//      shuffle randomly organizes keys
// shuffle($cards); 


// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]; #set the variable
// shuffle($cards); #randomizes numbers
// #       SPLICE simplified version - note that array splice removes first 5 keys
// // $playerCards = array_splice($cards, 0, 5); 
// #       SPLICE dynamic version - counts deck then divides by 2
// $playerCards = array_splice($cards, 0, count($cards) / 2);
// $computerCards = $cards; #picks from remainder of keys

// // $playerDraw = $playerCards[4]; 
// // Will specify 4th key / last position

// // $playerDraw = $playerCards[count($playerCards) -1]; 
// // Dynamic - calculates last position

// var_dump($playerCards);

// $playerDraw = array_pop($playerCards);
// #Array Pop will remove last number in position, alters original variable

// var_dump($playerCards);
// var_dump($playerDraw);


#       Coin Flip Tutorial Conditionals

// # Player's Choice
// $coin = ['heads', 'tails'];
// $randomNumber = rand(0,1);
// $player1Choice = $coin[$randomNumber];

// # Coin Flip
// $randomNumber = rand(0,1);
// $flip = $coin[$randomNumber];

// if($player1Choice == $flip) {
//     var_dump('Player 1 Wins!');
// } else {
//     var_dump('Player 1 lost');
// }


// $moves = ['rock', 'paper', 'scissors'];
// $player1Move = $moves[rand(0,2)];
// $player2Move = $moves[rand(0,2)];

// // var_dump($player1Move);
// // var_dump($player2Move);

// if ($player1Move == $player2Move) {
//     var_dump('Tie');
// } elseif ($player1Move == 'rock' and $player2Move == 'paper') {
//     var_dump('Player 2 wins');
// } elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
//     var_dump('Player 1 wins');
// } 