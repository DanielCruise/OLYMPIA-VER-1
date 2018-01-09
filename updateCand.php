<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'olympia_1';

$name = array("", "", "", "");

$conn = new mysqli($servername, $username, $password, $dbName);

for ($i = 1; $i < 5; $i++) {
    $tmpCand = "name" . $i;
    $x = (string)$tmpCand; // convert name of input ques to string
    $name[$i - 1] = $_POST[$x];
}

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE candidate SET nameCan = '$name[$k]' WHERE candInd = '$i'";
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