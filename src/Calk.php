<?php

namespace App;

class Calk implements CalcInterface
{
    
    function __construct() {
        $this->numberA = $_POST['numberA'];
        $this->numberB = $_POST['numberB'];
        $this->action = $_POST['action'];
    }



    public function calculate()
    {
        switch ($this->action) {
            case '*':
                return $this->multiply($this->numberA, $this->numberB);
                break;
            case '/':
                return $this->divide($this->numberA, $this->numberB);
                break;
            case '+':
                return $this->plus($this->numberA, $this->numberB);
                break;
            case '-':
                return $this->minus($this->numberA, $this->numberB);
                break;
            case 'log':
                return $this->logarithm($this->numberA, $this->numberB);
                break;
            case 'pow':
                return $this->pow($this->numberA, $this->numberB);
                break;
            case '√':
                return $this->sqrt($this->numberA);
                break;
            case 'sin':
                return $this->sin($this->numberA);
                break;
            case 'cos':
                return $this->cos($this->numberA);
                break;
            case 'hypot':
                return $this->hypot($this->numberA, $this->numberB);
                break;
            default:
                # code...
                break;
        }
    }


    public function multiply(float $a, float $b): float {
        return ($a*$b);
    }
    
    public function divide(float $a, float $b): float {
        return ($a/$b); 
    }

    public function plus(float $a, float $b): float {
        return ($a+$b); 
    }

    public function minus(float $a, float $b): float {
        return ($a-$b); 
    }

    public function logarithm(float $a, float $b): float {
        return log($a, $b); 
    }

    public function pow(float $a, float $b): float {
        return pow($a, $b); 
    }
    
    public function sqrt(float $a): float {
        return sqrt($a); 
    }

    public function sin(float $a): float {
        return sin(deg2rad($a)); 
    }

    public function cos(float $a): float {
        return cos(deg2rad($a)); 
    }

    public function hypot(float $a, float $b): float {
        return hypot($a, $b); 
    }

}