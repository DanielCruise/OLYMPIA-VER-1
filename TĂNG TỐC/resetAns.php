<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$i = 1;
$conn = new mysqli($servername, $username, $password, $dbName);

for ($i = 1; $i < 5; $i++) {
    $sql = "UPDATE accecandidateanswer SET candAns = '', ansTime = 0.00 WHERE candInd = '$i'";
    $conn->query($sql);
}
$conn->close();


?>
