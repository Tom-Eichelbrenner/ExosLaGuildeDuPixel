<?php

function fizzBuzz(int $number)
{
    if ($number < 0 || $number > 20) {
        echo "Error <br>";
    } else {
        if ($number % 15 === 0) {
            echo "FizzBuzz <br>";
        } elseif ($number % 5 === 0) {
            echo "Buzz <br>";
        } elseif ($number % 3 === 0) {
            echo "Fizz <br>";
        } else {
            echo $number . "<br>";
        }
    }
}

fizzBuzz(-1);
fizzBuzz(1);
fizzBuzz(2);
fizzBuzz(3);
fizzBuzz(4);
fizzBuzz(5);
fizzBuzz(6);
fizzBuzz(7);
fizzBuzz(8);
fizzBuzz(9);
fizzBuzz(10);
fizzBuzz(11);
fizzBuzz(12);
fizzBuzz(13);
fizzBuzz(14);
fizzBuzz(15);
fizzBuzz(16);
fizzBuzz(17);
fizzBuzz(18);
fizzBuzz(19);
fizzBuzz(20);
fizzBuzz(21);

