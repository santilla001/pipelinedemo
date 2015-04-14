<?php
require_once('calculatortest.php')
class CalcTest extends calc
{
    public function TestAdd($number1, $number2)
    {
        $this->assertEquals($number1 + $number2);
    }
}
?>
