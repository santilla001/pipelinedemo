<?php
require_once('calculatortest.php');

class CalcTest extends calc
{
    public function add($number1, $number2)
    {
        $this->assertEquals($number1 + $number2);
    }

    public function additionProvider()
    {
        return array(
          array(0, 0),
          array(0, 1),
          array(1, 0),
          array(1, 1)
        );
    }
}
?>
