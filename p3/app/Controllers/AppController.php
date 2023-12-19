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
        $this->app->validate([
            'choice' => 'required'
        ]);

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

        #Records game into database table
        $this->app->db()->insert('rounds',[
            'choice' => $choice,
            'computer' => $computer,
            'result' => $result,
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        #Returns player to game page and stores results
        return $this->app->redirect('/', [
            'choice' => $choice, 
            'computer' => $computer, 
            'result' => $result
        ]);
    }

    public function history() 
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', ['rounds' => $rounds]);
    }

    public function round()
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);
        
        return $this->app->view('round', ['round' => $round]);
    }
}