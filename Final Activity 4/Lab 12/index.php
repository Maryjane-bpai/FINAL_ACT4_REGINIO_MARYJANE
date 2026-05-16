<?php
$grade = strtoupper(readline("Enter letter grade (A,B,C,D,F): "));

switch ($grade) {
    case 'A':
        echo "Excellent";
        break;
    case 'B':
        echo "Good";
        break;
    case 'C':
        echo "Average";
        break;
    case 'D':
        echo "Below Average";
        break;
    case 'F':
        echo "Failed";
        break;
    default:
        echo "Invalid grade";
}
?>