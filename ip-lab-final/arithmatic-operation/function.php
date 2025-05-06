<?php
    function sum($num1, $num2){
        return $num1 + $num2;
    }

    function sub( $num1, $num2){
        return $num1 - $num2;
    }

    function mul ($num1, $num2){
        return $num1 * $num2;
    }

    function div ($num1, $num2){
        return $num1 / $num2;
    }

    echo"Summision: " .sum(10, 5 )."<br>";
    echo"Subtraction: " .sub(10, 5 )."<br>";
    echo"MUltiplicaiton: " .mul(10, 5 )."<br>";
    echo"Division: " .div(10, 5 )."<br>";
?>