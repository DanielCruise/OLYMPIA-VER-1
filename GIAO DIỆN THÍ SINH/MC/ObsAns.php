<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "SELECT * FROM tempobstacle";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
echo $row["ans"];

$conn->close();

?>