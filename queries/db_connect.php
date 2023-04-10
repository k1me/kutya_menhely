<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kutyamenhely";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Nem sikerült csatlakozni: " . $conn->connect_error);
}
?>