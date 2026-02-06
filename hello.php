<?php
$conn = new mysqli("localhost", "root", "y22acm430");
if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}
echo "MySQLi is working!";
?>
