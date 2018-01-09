<?php
// READY TO CONNECT TO MYSQL SERVER
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';

// create connection

$conn = new mysqli($servername, $username, $password);

// Check connection

if ($conn->connect_error) {
    die('Connection failed.' . $conn->connect_error);
}
echo 'Connected successfully';

// Create DB

$sql = "CREATE DATABASE candidate";

// Check if db has been created successfully
if ($conn->query($sql) === true) {
    echo "Database created Succesfully" . "<br>";
} else {
    echo "Database creating failed." . $conn->connect_error . "<br>";
}

$conn = new mysqli($servername, $username, $password, "candidate");

// Create candidate table
$sql = "CREATE TABLE candidate (
    candInd INT(1) PRIMARY KEY,
    nameCan VARCHAR(20) ,
    point INT(3),
    code VARCHAR(30)
)";
// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Candidate table created Succesfully" . "<br>";
} else {
    echo "Candidate table creating failed." . $conn->connect_error . "<br>";
}
/// Obstacle Ans Table
$sql = "CREATE TABLE obstacleCandidateAnswer (
    candInd INT(2) PRIMARY KEY NOT NULL,
    nameCan VARCHAR(20),
    candAns VARCHAR(50),
    obstacleGranted INT(1) NOT NULL,
    adven INT(1)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Obstacle Ans table created Succesfully" . "<br>";
} else {
    echo "Obstacle Ans table creating failed." . $conn->connect_error . "<br>";
}
// Acceleration Ans Table
$sql = "CREATE TABLE acceCandidateAnswer (
    candInd INT(2) PRIMARY KEY NOT NULL,
    nameCan VARCHAR(20),
    candAns VARCHAR(50),
    ansTime FLOAT(5)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Acce Ans table created Succesfully" . "<br>";
} else {
    echo "Acce Ans table creating failed." . $conn->connect_error . "<br>";
}

// Finishing Candidate Granted table

$sql = "CREATE TABLE FinishingCandidateGranted (
    candInd INT(2) PRIMARY KEY NOT NULL,
    nameCan VARCHAR(20),
    finishingGranted INT(1) NOT NULL, 
    allowGranted INT(1) NOT NULL 
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Finishing Granting table created Succesfully" . "<br>";
} else {
    echo "Finishing Granting table creating failed." . $conn->connect_error . "<br>";
}

// Finishing Candidate Granted table

$sql = "CREATE TABLE ExtraQuesCandidateGranted (
    candInd INT(2) PRIMARY KEY NOT NULL,
    nameCan VARCHAR(20),
    granted INT(1) NOT NULL, 
    allowed INT(1) NOT NULL,
    registered INT(1) NOT NULL
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Finishing Granting table created Succesfully" . "<br>";
} else {
    echo "Finishing Granting table creating failed." . $conn->connect_error . "<br>";
}

// INSERT DATA FOR CANDIDATE
for ($candInd = 1; $candInd < 5; $candInd++) {
    $sql = "INSERT INTO candidate (candInd, nameCan, point) VALUES ('$candInd', '', '0')";
    if ($conn->query($sql) === true) {
        if ($candInd == 4) echo "Candidate " . $i . " created Succesfully" . "<br>";
    } else {
        if ($candInd == 4) echo "Candidate " . $i . " created failed" . $conn->connect_error . "<br>";
    }
}
// INSERT INITIALLIZED DATA FOR OBSTACLE ANSWER TABLE
for ($candInd = 1; $candInd < 5; $candInd++) {
    $sql = "INSERT INTO obstaclecandidateanswer (candInd, nameCan, candAns, obstacleGranted) VALUES ('$candInd', '', '', '0.00')";
    if ($conn->query($sql) === true) {
        if ($candInd == 4) echo "Obs candidate " . $i . " created Succesfully" . "<br>";
    } else {
        if ($candInd == 4) echo "Obs candidate " . $i . " created failed" . $conn->connect_error . "<br>";
    }
}

// INSERT INITIALLIZED DATA FOR ACCELERATION ANSWER TABLE
for ($candInd = 1; $candInd < 5; $candInd++) {
    $sql = "INSERT INTO accecandidateanswer (candInd, nameCan, candAns, ansTime) VALUES ('$candInd', '', '', '0')";
    if ($conn->query($sql) === true) {
        if ($candInd == 4) echo "Acce candidate " . $i . " created Succesfully" . "<br>";
    } else {
        if ($candInd == 4) echo "Acce candidate " . $i . " created failed" . $conn->connect_error . "<br>";
    }
}

// INSERT INITIALLIZED DATA FOR FINISHING GRANTED TABLE
for ($candInd = 1; $candInd < 5; $candInd++) {
    $sql = "INSERT INTO finishingcandidategranted (candInd, nameCan, finishingGranted, allowGranted) VALUES ('$candInd', '', '0', '0')";
    if ($conn->query($sql) === true) {
        if ($candInd == 4) echo "Finishing candidate " . $i . " created Succesfully" . "<br>";
    } else {
        if ($candInd == 4) echo "Finishing candidate " . $i . " created failed" . $conn->connect_error . "<br>";
    }
}

// INSERT INITIALLIZED DATA FOR EXTRA QUES GRANTED TABLE
for ($candInd = 1; $candInd < 5; $candInd++) {
    $sql = "INSERT INTO extraquescandidategranted (candInd, nameCan, granted, allowed, registered) VALUES ('$candInd', '', '0', '0', '0')";
    if ($conn->query($sql) === true) {
        if ($candInd == 4) echo "Finishing candidate " . $i . " created Succesfully" . "<br>";
    } else {
        if ($candInd == 4) echo "Finishing candidate " . $i . " created failed" . $conn->connect_error . "<br>";
    }
}

// CREATE TEMP TABLES
// Warming-up temp table
$sql = "CREATE TABLE tempWarmingUp (
    candInd INT(2),
    ques VARCHAR(500),
    ans VARCHAR(100)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Warming up temp table created Succesfully" . "<br>";
} else {
    echo "Warming up temp table creating failed." . $conn->connect_error . "<br>";
}

// Obstacle temp table
$sql = "CREATE TABLE tempObstacle (
    candInd INT(2),
    ques VARCHAR(500),
    ans VARCHAR(100)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Obstacle temp table created Succesfully" . "<br>";
} else {
    echo "Obstacle temp table creating failed." . $conn->connect_error . "<br>";
}

// Acceleration temp table
$sql = "CREATE TABLE tempAcceleration (
    candInd INT(2),
    ques VARCHAR(500),
    ans VARCHAR(100)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Acceleration temp table created Succesfully" . "<br>";
} else {
    echo "Accelearation temp table creating failed." . $conn->connect_error . "<br>";
}

// Finishing temp table
$sql = "CREATE TABLE tempFinishing (
    candInd INT(2),
    ques VARCHAR(500),
    ans VARCHAR(500),
    timeQues INT(2)
)";


// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Finishing temp table created Succesfully" . "<br>";
} else {
    echo "Finishing temp table creating failed." . $conn->connect_error . "<br>";
}

// Extra sections table

$sql = "CREATE TABLE tempExtraQues (
    candInd INT(2),
    ques VARCHAR(500),
    ans VARCHAR(500)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Extra section temp table created Succesfully" . "<br>";
} else {
    echo "Extra section temp table creating failed." . $conn->connect_error . "<br>";
}

//////////////// INSERT DATA

//  TEMP TABLES
// Warming-up temp table
$sql = "INSERT INTO tempwarmingup (candInd, ques, ans) VALUES ('0', '', '')";
if ($conn->query($sql) === true) {
    echo "Tmp warming up " . $i . " created Succesfully" . "<br>";
} else {
    echo "Tmp warming up " . $i . " created failed" . $conn->connect_error . "<br>";
}

// Obstacle temp table
$sql = "INSERT INTO tempobstacle (candInd, ques, ans) VALUES ('0', '', '')";
if ($conn->query($sql) === true) {
    echo "Tmp obstacle " . $i . " created Succesfully" . "<br>";
} else {
    echo "Tmp obstacle " . $i . " created failed" . $conn->connect_error . "<br>";
}

// Acceleration temp table
$sql = "INSERT INTO tempacceleration (candInd, ques, ans) VALUES ('0', '', '')";
if ($conn->query($sql) === true) {
    echo "Tmp acce " . $i . " created Succesfully" . "<br>";
} else {
    echo "Tmp acce " . $i . " created failed" . $conn->connect_error . "<br>";
}

// Finishing temp table
$sql = "INSERT INTO tempfinishing (candInd, ques, ans, timeQues) VALUES ('0', '', '', '0')";
if ($conn->query($sql) === true) {
    echo "Tmp finishing " . $i . " created Succesfully" . "<br>";
} else {
    echo "Tmp finishing " . $i . " created failed" . $conn->connect_error . "<br>";
}

// Finishing temp table
$sql = "INSERT INTO tempextraques (candInd, ques, ans) VALUES ('0', '', '')";
if ($conn->query($sql) === true) {
    echo "Tmp finishing " . $i . " created Succesfully" . "<br>";
} else {
    echo "Tmp finishing " . $i . " created failed" . $conn->connect_error . "<br>";
}
?>
/**
 * Created by PhpStorm.
 * User: Windows 10
 * Date: 21/10/2017
 * Time: 9:42 CH
 */