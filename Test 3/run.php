<?php

require_once('./Database.php');

$Database = Database::Connect('127.0.0.1', 'test3', 'username', 'password');

$Query = $Database->query('SELECT 1 as test');
print_r($Query->fetch(PDO::FETCH_ASSOC));