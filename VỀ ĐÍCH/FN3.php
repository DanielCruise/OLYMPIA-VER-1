<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$ans = $_POST["obsAns3"];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "SELECT * FROM finishingcandidategranted where candInd = '3'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo $row["finishingGranted"];



$conn->close();


?>
