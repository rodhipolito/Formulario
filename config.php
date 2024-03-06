<?php

$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'db_cadastro';

$conn = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

// Verifica a conexão
//if ($conn->connect_error) {
   /// die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
?>
