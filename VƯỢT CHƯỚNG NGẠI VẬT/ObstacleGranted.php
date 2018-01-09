<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

// an array to store obs granting variables
$obsGranted = [0, 0, 0, 0];

$conn = new mysqli($servername, $username, $password, $dbName);

for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM obstaclecandidateanswer where candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["candInd"] == '1') $obsGranted[0] = $row["obstacleGranted"];
    if ($row["candInd"] == '2') $obsGranted[1] = $row["obstacleGranted"];
    if ($row["candInd"] == '3') $obsGranted[2] = $row["obstacleGranted"];
    if ($row["candInd"] == '4') $obsGranted[3] = $row["obstacleGranted"];
}

$conn->close();

?>