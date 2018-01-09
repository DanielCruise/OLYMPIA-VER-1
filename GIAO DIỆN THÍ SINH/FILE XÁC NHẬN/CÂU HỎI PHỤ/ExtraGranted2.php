<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$ans = $_POST["grantedExtra2"];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE extraquescandidategranted SET granted = '$ans' WHERE candInd = 2";
$conn->query($sql);

for ($i = 1; $i < 5; $i++) {
$sql = "UPDATE extraquescandidategranted SET allowed = 0 WHERE candInd = '$i'";
$conn->query($sql);
}

$conn->close();

?>
/**
* Created by IntelliJ IDEA.
* User: Windows 10
* Date: 22/08/2017
* Time: 10:45 SA
*/