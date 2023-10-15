<?php
$answer = $_POST['answer'];

$haveAnswer = true;

if ($answer == '') {
    $haveAnswer = false; 
}

$correct = $answer == 'pumpkin';

require 'process-view.php';