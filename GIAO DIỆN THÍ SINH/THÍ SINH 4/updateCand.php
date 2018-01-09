<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';
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

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE obstalecandidateanswer SET nameCan = '$name[$k]' WHERE candInd = '$i'";
    $conn->query($sql);
    $sql = "UPDATE obstalecandidateanswer SET obstacleGranted = '0' WHERE candInd = '$i'";
    $conn->query($sql);
}

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE accecandidateanswer SET nameCan = '$name[$k]' WHERE candInd = '$i'";
    $conn->query($sql);
}

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE finishingcandidategranted SET finishingGranted = '0' WHERE candInd = '$i'";
    $conn->query($sql);
}

$conn->close();

?>
