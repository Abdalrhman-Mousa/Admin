<?php

$servername = "localhost";
$username = "root";
$password = "Abood_93";

try {
  $conn = new PDO("mysql:host=$servername;dbname=store", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "done";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



?>