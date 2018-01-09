<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$name = $_POST["name2"];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE candidate SET nameCan = '$name' WHERE candInd = 2";
$conn->query($sql);
$sql = "UPDATE obstaclecandidateanswer SET nameCan = '$name' WHERE candInd = 2";
$conn->query($sql);
$sql = "UPDATE accecandidateanswer SET nameCan = '$name' WHERE candInd = 2";
$conn->query($sql);
$sql = "UPDATE finishingcandidategranted SET nameCan = '$name' WHERE candInd = 2";
$conn->query($sql);
$sql = "UPDATE extraquescandidategranted SET nameCan = '$name' WHERE candInd = 2";
$conn->query($sql);

$conn->close();

?>
/**
* Created by IntelliJ IDEA.
* User: Windows 10
* Date: 22/08/2017
* Time: 10:45 SA
*/