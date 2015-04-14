<?php
require_once('calculator.php');
class CalcTest extends calc
{
    public function TestAdd()
    {
      	$calc = new calc();
	$result = $calc->add(2, 2);
	$this->assertEquals(4, $result);
    }
}
?>
