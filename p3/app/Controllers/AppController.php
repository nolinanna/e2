<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {
        #Persists results to the current session
        $choice = $this->app->old('choice');
        $computer = $this->app->old('computer');
        $result = $this->app->old('result');

        #Displays results if any
        return $this->app->view('index', [
            'choice' => $choice,
            'computer' => $computer,
            'result' => $result
        ]);
    }

    public function process()
    {
        # Player's choice
        $choice = $this->app->input('choice');

        # Computer's choice
        $computer = ['rock', 'paper', 'scissors'][rand(0, 2)];

        #Winning Conditions
        if ($choice == $computer) {
            $result = 'tie';
        } elseif ($choice == 'rock' && $computer == 'scissors' or $choice == 'paper' && $computer == 'rock' or $choice == 'scissors' && $computer == 'paper') {
            $result = 'win';
        } else {
            $result = 'lose';
        }

        #Returns player to game page and stores results
        return $this->app->redirect('/', [
            'choice' => $choice, 
            'computer' => $computer, 
            'result' => $result
        ]);
    }

    public function history() 
    {
        return $this->app->view('history');
    }

    public function round()
    {
        return $this->app->view('round');
    }
}