<?php

// The request is exclusive on the personal computer itself.
$host = "localhost";   

// Database default user and password.
$user = "root";         
$password = "";

// Database name
$dbname = "bicycle_store";

// This variable represents the data source name, which is where the values are stored or the selected database
//where we perform CRUD operations: create, read, update, and delete.
$dsn = "mysql:host{$host};dbname={$dbname}";

// Creating a PDO (PHP Data Object) requires a data source name, as well as a username and password for the database, if applicable.
//In the code above, I used the default username and password.
$pdo = new PDO($dsn, $user, $password);

// Declaring of time zone to determine the time stamp, to make the time and date accurate.
$pdo->exec("SET time_zone = '+08:00';");    

?>