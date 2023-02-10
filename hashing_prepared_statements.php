<?php

// https://www.php.net/manual/en/function.password-hash.php


// username & password
$password = 'test';
$passwordhash = '';

// hash the password

$passwordhash = password_hash($password, PASSWORD_DEFAULT);

// print the hash
print($passwordhash);

// prepared statements

// https://www.w3schools.com/php/php_mysql_prepared_statements.asp

$servername = 'localhost';
$db_user_name = 'root';
$db_password = '';
$dbname = 'database.db';

$first_name = 'Matthias';
$password = '';


// Create connection
$conn = new mysqli($servername,$db_user_name,$db_password,$dbname);

// prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, PASSWORD(password)) VALUES (?, ?)");

// bind param
$stmt->bind_param("ss", $first_name, $password);

// execute statement
$stmt->execute();

$stmt->close();
$conn->close();

?>

