<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$ans = $_POST["obsAns4"];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "SELECT * FROM obstaclecandidateanswer where candInd = '4'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo $row["obstacleGranted"];




$conn->close();

?>
