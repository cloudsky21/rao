<?php
$exec = exec("hostname"); //the "hostname" is a valid command in both windows and linux
$hostname = trim($exec); //remove any spaces before and after
$ip = gethostbyname($hostname); //resolves the hostname using local hosts resolver or DNS


$servername = "127.0.0.1";
$username = "root";
$password = "pinipirawako";
$dbname = "budgetsystem";
$charset = 'utf8';

$dsn = "mysql:host=$servername;dbname=$dbname;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$db = new PDO($dsn, $username, $password, $opt);
?>