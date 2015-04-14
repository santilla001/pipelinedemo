<?php
require_once('calculator.php');
class AddTest extends calc
{
    public function TestAdd()
    {
      	$calc = new calc();
	$result = $calc->add(5,7 );
	$this->assertEquals(12, $result);
    }
}
?>
