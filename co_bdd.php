<?php
$conn = new mysqli("localhost", "root", "", "location");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>