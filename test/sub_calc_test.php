<?php
require_once('calculator.php');
class SubtractTest extends calc
{
    public function TestSubtract()
    {
  $calc = new calc();
	$result = $calc->subtract(7,5 );
	$this->assertEquals(2, $result);
    }
}
?>
