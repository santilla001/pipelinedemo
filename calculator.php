<?php 
// Calculator Group 6 (Keir, Amanda, Ryan)

// Define to make this all one document 
$page = $_GET['page']; 

// Defining the "calc" class 
class calc { 
     var $number1; 
     var $number2; 

          function add($number1,$number2) 
          { 
                   $result =$number1 + $number2; 
                    echo("The sum of $number1 and $number2 is $result<br><br>"); 
                    echo("$number1 + $number2 = $result"); 
                    exit; 
           } 

          function subtract($number1,$number2) 
          { 
                   $result =$number1 - $number2; 
                    echo("The difference of $number1 and $number2 is $result<br><br>"); 
                    echo("$number1 &#045 $number2 = $result"); 
                    exit; 
           } 

          function divide($number1,$number2) 
          { 
                   $result =$number1 / $number2; 
                    echo("$number1 divided by $number2 is $result<br><br>"); 
                    echo("$number1 ÷ $number2 = $result"); 
                    exit; 
           } 

          function multiply($number1,$number2) 
          { 
                   $result =$number1 * $number2; 
                    echo("The product of $number1 and $number2 is $result<br><br>"); 
                    echo("$number1 x $number2 = $result"); 
                    exit; 
           } 
} 
$calc = new calc(); 
?>

