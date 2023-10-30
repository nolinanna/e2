<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $outcome = $results['outcome'];
    $computer = $results['computer'];
    $choice = $results['choice'];

    $_SESSION['results'] = null;
}

require 'index-view.php';