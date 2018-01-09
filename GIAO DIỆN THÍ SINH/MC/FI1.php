<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'olympia_1';

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "SELECT * FROM finishingcandidategranted where candInd = 1";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo $row["allowGranted"];

$conn->close();

?>