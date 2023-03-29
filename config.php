<?php

// Database configuration
$Host = '138.201.53.131';
$Username = 'mwfiedvq_meals';
$Password = 'Bangla@desh33';
$dbName = 'mwfiedvq_meals';

// Create a database connection
$mysqli = new mysqli($Host, $Username, $Password, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

?>
