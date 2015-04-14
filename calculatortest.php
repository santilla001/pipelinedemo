<?php
require_once('calculator.php');

class CalcTest extends calc
{
    $number1 = 1;
    $number2 = 2;
    
    public function add($number1, $number2)
    {
        $this->assertEquals($number1 + $number2);
        echo("$number1 + $number2 = $this");
    }
    
}
?>
