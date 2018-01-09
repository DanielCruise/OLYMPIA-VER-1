<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$curQuestion = $_POST['question'];
$curAns = $_POST['answer'];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE tempextraques SET  ques = '$curQuestion', ans = '$curAns'";
$conn->query($sql);

$conn->close();


?>
