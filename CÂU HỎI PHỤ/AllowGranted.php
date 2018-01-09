<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$allow = $_POST['x'];

$conn = new mysqli($servername, $username, $password, $dbName);

for ($i = 1; $i < 5; $i++) {
    $sql = "UPDATE extraquescandidategranted SET allowed = '$allow' WHERE candInd = '$i'";
    $conn->query($sql);
}

$conn->query($sql);
$conn->close();


?>
