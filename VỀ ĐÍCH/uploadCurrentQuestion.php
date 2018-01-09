<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';

$curQuestion = $_POST['question'];
$curCand = $_POST['curCand'];
$curTime = $_POST['curTime'];
$curAns = $_POST['answer'];

$conn = new mysqli($servername, $username, $password, $dbName);


$sql = "UPDATE tempfinishing SET  ques = '$curQuestion', candInd = '$curCand', timeQues = '$curTime', ans = '$curAns'";
$conn->query($sql);

$conn->close();


?>
