<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'olympia_1';

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "SELECT * FROM extraquescandidategranted where candInd = 4";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo $row["allowed"];

$conn->close();

?>