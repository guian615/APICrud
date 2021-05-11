<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $_POST["Query"];

if ($conn->query($sql) === TRUE) {
  echo "Ayaw Kol Bata pako Kol :)";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>