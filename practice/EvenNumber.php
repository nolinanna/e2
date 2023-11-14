<?php

class EvenNumber extends Number 
{
    public function isValid()
    {
        #use parent:: as shortcut to function
    return is_numeric($this->num) and $this->num % 2 == 0;
    }
}