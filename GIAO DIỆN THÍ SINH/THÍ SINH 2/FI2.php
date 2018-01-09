<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "SELECT * FROM finishingcandidategranted where candInd = 2";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo $row["allowGranted"];

$conn->close();

?>