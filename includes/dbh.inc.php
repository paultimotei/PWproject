<?php //select user(); //settings/features/general/Hide databases
//By default hiddent databases have these patterns: information_schema|mysql|performance_scema|test|phpmyadmin


$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword);

@mysqli_select_db($dbName,$conn) or ("Database not found");
