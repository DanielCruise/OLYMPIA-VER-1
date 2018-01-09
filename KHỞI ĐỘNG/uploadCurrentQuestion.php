<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$curQuestion = $_POST['question'];
$curCand = $_POST['curCand'];
$curAns = $_POST['answer'];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE tempwarmingup SET ques = '$curQuestion', candInd = '$curCand', ans = '$curAns'";
$conn->query($sql);

$conn->close();


?>
