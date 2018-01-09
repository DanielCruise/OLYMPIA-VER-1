<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE extraquescandidategranted SET registered = '1' WHERE candInd = 2";
$conn->query($sql);


$conn->close();

?>
/**
* Created by IntelliJ IDEA.
* User: Windows 10
* Date: 22/08/2017
* Time: 10:45 SA
*/