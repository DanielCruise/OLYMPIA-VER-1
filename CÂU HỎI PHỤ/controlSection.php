<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$curCand = $_POST['curCand'];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE tempextraques SET candInd = '$curCand'";
$conn->query($sql);

$conn->close();


?>
