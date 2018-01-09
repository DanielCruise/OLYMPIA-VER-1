<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$ans = $_POST["grantedAns1"];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE obstaclecandidateanswer SET obstacleGranted = '$ans' WHERE candInd = 1";
$conn->query($sql);



$conn->close();

?>
/**
* Created by IntelliJ IDEA.
* User: Windows 10
* Date: 22/08/2017
* Time: 10:45 SA
*/