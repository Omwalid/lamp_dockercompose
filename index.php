<?php 

$servername = "database";
$username = "omwalid";
$password = "jaja";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myapp", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully ";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

echo " hello from docker compose"

?>