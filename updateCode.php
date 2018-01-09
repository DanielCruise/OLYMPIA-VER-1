<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$code = $_POST["code"];

$conn = new mysqli($servername, $username, $password, $dbName);


for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE candidate SET code = '$code' WHERE candInd = '$i'";
    $conn->query($sql);
}

$conn->close();

?>
/**
 * Created by PhpStorm.
 * User: Windows 10
 * Date: 22/10/2017
 * Time: 10:53 SA
 */