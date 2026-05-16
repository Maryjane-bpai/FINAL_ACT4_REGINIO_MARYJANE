<?php
$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");
$num3 = readline("Enter third number: ");

if ($a >= $b && $a >= $c) {
    echo "Largest number: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest number: $b";
} else {
    echo "Largest number: $c";
}
?>