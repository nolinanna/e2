<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh(){
        $this->migrate();
        // $this->seed();
    }
    
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'varchar(8)',
            'computer' => 'varchar(8)',
            'result' => 'varchar(4)',
            'timestamp' => 'timestamp',
        ]);

        dump('Migration Complete');
    }

    public function seed()
    {
        $faker = Factory::create();

        for($i = 10; $i > 0; $i--) {
            $choice = ['rock', 'paper', 'scissors'][rand(0,2)];
            $computer = ['rock', 'paper', 'scissors'][rand(0,2)];
    
            if ($choice == $computer) {
                $result = 'tie';
            } elseif ($choice == 'rock' && $computer == 'scissors' or $choice == 'paper' && $computer == 'rock' or $choice == 'scissors' && $computer == 'paper') {
                $result = 'win';
            } else {
                $result = 'lose';
            }

            $this->app->db()->insert('rounds', [
                'choice' => $choice,
                'computer' => $computer,
                'result' => $result,
                'timestamp' => $faker->dateTimeBetween('-'.$i.' days', '-'.$i.' days')->format('Y-m-d H:i:s')
            ]);
        }

        dump('Seeds Complete');
    }
}