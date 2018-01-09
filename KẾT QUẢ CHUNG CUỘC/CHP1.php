<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE extraquescandidategranted SET registered = '1' WHERE candInd = 1";
$conn->query($sql);


$conn->close();

?>
