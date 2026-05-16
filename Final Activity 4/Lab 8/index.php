<?php
$age = readline("Enter your age: ");
$citizenship = readline("Enter citizenship: ");

if ($age >= 18) {
    if (strtolower($citizen) == "Filipino") {
        echo "Eligible to vote";
    } else {
        echo "Not eligible to vote";
    }
} else {
    echo "Not eligible to vote";
}
?>