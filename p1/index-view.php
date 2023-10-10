<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Going to Boston</h1>
    <h2>Game Mechanics</h2>
    <ol>
        <li>Players roll a die to see who goes first. The player with the higher number goes first. If they tie, they
            roll again.</li>
        <li>There are three components to a turn.
            <ul>
                <li>First, the player rolls 3 dice and selects the highest number of that set.</li>
                <li>Second, the player rolls 2 dice and selects the highest number of that set.</li>
                <li>Finally, the player rolls 1 die.</li>
                <li>The numbers are added up for their turn's score.</li>
            </ul>
        <li>Once both players have gone, their scores are compared.</li>
        <li>Whoever has the highest score wins.</li>
    </ol>
    <h2>Results</h2>
    <ul>
        <li><?php echo $tied ?></li>
        <li><b>Player 1</b> rolled a <b><?php echo $first ?></b>.</li>
        <li><b>Player 2</b> rolled a <b><?php echo $second ?></b>.</li>
        <li><b><?php echo $currentPlayer ?></b> starts.</li>
        <!-- <li><b><?php echo $start1 ?><?php echo $start2 ?></b> got
            <?php var_dump($firstRoll)?>. <?php echo $moveOne ?> was
            the highest number.</li>
        <li><b><?php echo $currentPlayer ?></b> got <?php var_dump($secondRoll)?>.
            <?php echo $moveTwo ?> was the highest number.</li>
        <li><b><?php echo $currentPlayer ?></b> got <?php echo $moveThree ?> for their
            final roll.</li>
        <li><b><?php echo $currentPlayer ?></b>'s score is <?php echo $resultA ?>.</li> -->
        <!-- <li>Player # got (1,2,3). <?php echo $moveOne ?> was the highest number.</li>
        <li>Player # got (1,2). <?php echo $moveTwo ?> was the highest number.</li>
        <li>Player # got <?php echo $moveThree ?> for their final roll.</li>
        <li>Player # score is <?php echo $resultB ?></li>
        <li>The winner is <?php echo $winner ?></li> -->
    </ul>
</body>

</html>