<?php

class Calculator {

    public function add($number1, $number2) {
        if(is_numeric($number1) && is_numeric($number2)) {
            return $number1 + $number2;
        }
        else {
            echo 'Both values should be numeric';
        }
    }

    public function subtract($number1, $number2) {
        if(is_numeric($number1) && is_numeric($number2)) {
            return $number1 - $number2;
        }
        else {
            echo 'Both values should be numeric';
        }
    }

    public function multiply($number1, $number2) {
        if(is_numeric($number1) && is_numeric($number2)) {
            return $number1 * $number2;
        }
        else {
            echo 'Both values should be numeric';
        }
    }

    public function divide($number1, $number2) {
        if(is_numeric($number1) && is_numeric($number2) && $number2 !== 0) {
            return $number1 / $number2;
        }
        else {
            echo "Both values should be numeric and divisor shouldn't be zero";
        }
    }

    




}



$calc = new Calculator();
echo $calc->add(20,10);
echo $calc->subtract(20,10);
echo $calc->multiply(20,10);
echo $calc->divide(20,10);







?>