<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';
$granted = array(0, 0, 0, 0);
$allow = $_POST["allow"];
$conn = new mysqli($servername, $username, $password, $dbName);


for ($i = 1; $i < 5; $i++) {
    $k = $i - 1;
    $sql = "UPDATE finishingcandidategranted SET finishingGranted = '$granted[$k]', allowGranted = '$allow' WHERE candInd = '$i'";
    $conn->query($sql);
}

$conn->close();

?>
