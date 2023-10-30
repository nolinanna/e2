<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 2 - Rock, Paper, Scissors</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class='layout'>
        <h1>Rock - Paper - Scissors</h1>

        <div class='instructions'>

            <h2>Instructions</h2>
            <p>Play a game of rock, paper, scissors with a virtual opponent. Select a choice below and click
                <i>shoot!</i> to play a round.
            </p>
            <br><b>Rock</b> beats scissors but loses to paper.
            <br><b>Paper</b> beats rock but loses to scissors.
            <br><b>Scissors</b> beats paper but loses to rock.
        </div>

        <p>
        <form method='POST' action='process.php'>

            <input type='radio' id='rock' name='choice' value='rock' <?php echo (!isset($choice) or $choice=='rock' )
                ? 'checked' : ' ' ?>>
            <label for='rock'>Rock</label>

            <input type='radio' id='paper' name='choice' value='paper' <?php echo (isset($choice) and $choice=='paper' )
                ? 'checked' : ' ' ?>>
            <label for='paper'>Paper</label>

            <input type='radio' id='scissors' name='choice' value='scissors' <?php echo (isset($choice) and
                $choice=='scissors' ) ? 'checked' : ' ' ?>><label for='scissors'>Scissors</label>

            <p><button type='submit' class='shoot'>Shoot!</button></p>
        </form>
        </p>

        <?php if(isset($results)) { ?>
        <h2>Results</h2>

        You played
        <?php echo $choice ?>, and your opponent played
        <?php echo $computer ?>.
        <?php echo $outcome ?>

        <?php } ?>
    </div>

</body>

</html>