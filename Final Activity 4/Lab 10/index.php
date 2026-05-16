<?php
$username = "admin";
$password = "1234";

$user = readline("Enter username: ");
$pass = readline("Enter password: ");

if ($username === "admin" && $password === "1234") {
    echo "Login successful! Welcome admin.\n";
} else {
    echo "Invalid username or password!\n";
}
?>