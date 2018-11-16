<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login_system";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
OR die('Could not connect to MySQL' .
		mysql_connect_error());

