﻿<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "SELECT * FROM candidate WHERE candInd = 3";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo "THÍ SINH 3: " . $row["nameCan"];

$conn->close();

?>