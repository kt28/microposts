<?php
    function fizzbuzz($number) {
        $result = 0;
        if ($number % 15 == 0) {
            $result = "FizzBuzz";
            }
        elseif ($number % 3 == 0) {
            $result = "Fizz";
        }
        elseif ($number % 5 == 0) {
            $result = "Buzz";
        }
        else {
            $result = $number;
        }
        
        print $result . PHP_EOL;
    }
    
    $max = 100;
    for ($i = 1; $i <= $max; $i++) {
        $fizzbuzz = fizzbuzz($i);
    }
?>