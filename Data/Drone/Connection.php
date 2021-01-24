<?php

$hostname = 'localhost';
$user_db = 'root';
$pass_db = '';
$name_db = 'drone_rental';

$conn = mysqli_connect($hostname, $user_db, $pass_db, $name_db);

if (mysqli_connect_errno()) {
    echo "Connection Failed, Check Server !!";
}