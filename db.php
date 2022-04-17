<?php
//creating database connection using pdo

$hostname = 'localhost';
$dbname = 'mini_project';
$username = 'root';
$password = '';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
