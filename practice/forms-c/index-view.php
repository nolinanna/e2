<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
    <style>
    .noAnswer {
        color: blue;
    }

    .incorrect {
        color: red;
    }

    .correct {
        color: green;
    }
    </style>
</head>

<body>

    <form method='POST' action='process.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if(isset($results)) { ?>
    <h1>Results</h1>

    <?php if($haveAnswer == false) { ?>
    <div class='noAnswer'>Please enter an answer.</div>
    <?php } else if ($correct) { ?>
    <div class='correct'>You got it correct!</div>
    <?php } else { ?>
    <div class='incorrect'>You got it wrong.</div>
    <?php } ?>
    <?php } ?>

</body>

</html>