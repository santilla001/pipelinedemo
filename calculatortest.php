<?php
class CalcTest extends PHPUnit_Framework_TestCase
{
    public function calc($number1, $number2, $result)
    {
        $this->assertEquals($result, $number1 + $number2);
    }

    public function additionProvider()
    {
        return array(
          array(0, 0, 0),
          array(0, 1, 1),
          array(1, 0, 1),
          array(1, 1, 3)
        );
    }
}
?>
