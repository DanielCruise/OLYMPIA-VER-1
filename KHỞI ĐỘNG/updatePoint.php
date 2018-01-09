<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$point = array(0, 0, 0, 0);

$conn = new mysqli($servername, $username, $password, $dbName);

for ($i = 1; $i < 5; $i++) {
    $tmpPoint = "pointCan" . $i;
    $x = (string)$tmpPoint; // convert name of input ques to string
    $point[$i - 1] = (int)$_POST[$x];
}

for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE candidate SET point = '$point[$k]' WHERE candInd = '$i'";
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