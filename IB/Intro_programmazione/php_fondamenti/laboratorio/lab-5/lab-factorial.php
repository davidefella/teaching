<?php
$num = 34;
$factorial = 1;

for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}

echo "The factorial of $num is $factorial";

//Recursive
function factorial($number) {

    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}

//echo factorial(4);

?>