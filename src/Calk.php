<?php

namespace App;

class Calk implements CalcInterface
{
    
    public function multiply(float $a, float $b): float {
        return ($a*$b);
    }
    
    public function divide(float $a, float $b): float {
        return ($a/$b); 
    }

}