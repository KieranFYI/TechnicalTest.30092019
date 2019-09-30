<?php

$username = 'test';
$password = 'test';

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
file_put_contents('./loginDetails.txt', $username . ':' . $passwordHash . PHP_EOL, FILE_APPEND);

require_once('./User.php');
echo User::Login($username, $password) ? 'Logged in' : 'Failed';

