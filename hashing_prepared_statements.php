<?php

// https://www.php.net/manual/en/function.password-hash.php


// username & password
$username = '';
$password = '';
$passwordhash = '';

// hash the password
// param: password: string
// param: algo: string

$passwordhash = password_hash($password, PASSWORD_DEFAULT);

// print the hash
print($passwordhash);

