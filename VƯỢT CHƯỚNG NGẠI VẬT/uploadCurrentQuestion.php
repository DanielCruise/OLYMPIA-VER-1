<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$curQuestion = $_POST['question'];
$curCand = $_POST['curCand'];
$curAns = $_POST['answer'];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE tempobstacle SET ques = '$curQuestion', ans = '$curAns', candInd = '$curCand'";
$conn->query($sql);

$conn->close();


?>
