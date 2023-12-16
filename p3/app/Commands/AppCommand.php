<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh(){
        $this->migrate();
        $this->seed();
    }
    
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'choice' => 'varchar(8)',
            'result' => 'varchar(4)',
            'timestamp' => 'timestamp',
        ]);

        dump('Migration Complete');
    }

    public function seed()
    {
        $faker = Factory::create();
        
        for($i = 10; $i > 0; $i--) {
            $this->app->db()->insert('rounds', [
                'choice' => ['rock', 'paper', 'scissors'][rand(0,2)],
                'result' => ['win', 'lose', 'tie'][rand(0,2)],
                'timestamp' => $faker->dateTimeBetween('-'.$i.' days', '-'.$i.' days')->format('Y-m-d H:i:s')
            ]);
        }

        dump('Seeds Complete');
    }
}