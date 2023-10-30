<?php

class Person {
    
    #Properties
    public $firstName;
    public $lastName;
    public $age;

    #Constructors
    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    #Methods
    public function getFullName() 
    {
        // return $this->firstName .= $this->lastName;
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getClassification()
    {  
        // if ($this->age <= 18) {
        //     return 'minor';
        // } else {
        //     return 'adult';
        // }

        return ($this->age >= 18) ? 'adult' : 'minor';
        
    }
}