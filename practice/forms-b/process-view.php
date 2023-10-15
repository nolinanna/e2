<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Results</title>

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

    <h1>Results</h1>

    <?php if($haveAnswer == false) { ?>
    <div class='noAnswer'>Please enter an answer.</div>
    <?php } else if ($answer == 'pumpkin') { ?>
    <div class='correct'>You got it correct!</div>
    <?php } else { ?>
    <div class='incorrect'>You got it wrong.</div>
    <?php } ?>

    <p><a href='index.php'>Try again.</a>
</body>

</html>