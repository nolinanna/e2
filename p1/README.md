# Project 1
+ By: Anna N.
+ URL: <http://e2p1.nolinanna.me>

## Game planning
+ Randomly pick 1 out of 6 for two dice rolls using rand. 
+ The highest roll assigns the first player. 
+ The other roll assigns the second player. 
+ If rolls are tied, loop through and re-roll until one is greater than the other. 
+ First dice roll, roll 3 dice. Highest number is kept. 
+ Second dice roll, roll 2 dice. Highest number is kept.
+ Final dice roll, pick random number from 1-6. 
+ Combine the highest numbers of each of these to make first player's score. 
+ Iterate through the turn again and assign the score to the second player. 
+ If first score is greater than second, then the "first player" wins. 
+ If second secore is greater than first, then the "second player" wins.
+ Report scores and breakdown to index page!

## Outside resources
* PHP: https://www.php.net/manual/en/language.control-structures.php (do-while, for, if, elseif, break, continue, switch)
* w3schools PHP: https://www.w3schools.com/php/php_switch.asp
* Stack Overflow: https://stackoverflow.com/questions/38985557/how-to-get-integer-value-from-arrayphp 
* chat GPT: questions "why is my code not working" and usually it pointed out that I had not defined variables outside of my control structure.

## Notes for instructor
I thought I chose a game that was really simple, but this turned out to be way beyond my current ability. My goal quickly transformed to "please just work." It does work now! But not in the most efficient way. I can't quite wrap my head around how to restructure the code to operate with the fewest redundancies. 

While attempting variations of if/for/while/etc to figure out how to make each player's turn populate the two scores, I didn't commit changes, so I apologize it may be hard for you to see all the stumbling blocks I faced. Once I stopped trying to iterate the loop using the "current player" as the metric for looping, and decided to view the loop as a single "turn", I got it to finally work (before, it would only populate the score of the current player, but not the other).

One thing I would like to figure out is how to display the numbers from the first and second dice rolls so you can see what composed the scores. However, it wouldn't let me echo out the integers from the array and I couldn't figure out why. Since it wasn't totally necessary to the overall mechanic, I had to put it aside. 

Disclaimer for chatGPT: I used chatGPT very little - only a few times to ask why something was broken in my code and I couldn't find it through googling. Basically after 3 times of the same thing, which was not defining variables outside of the control structure, I started to check for that myself, and was able to stop using it!



