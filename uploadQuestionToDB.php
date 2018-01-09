<?php
// INITIALIZE VARIABLES FOR SAVING QUESTIONS
$nameOfDb = "";
// WARMING UP
$warmingUpCan1 = array("", "", "", "", "", "", "", "", "", "", "", "");
$warmingUpCan2 = array("", "", "", "", "", "", "", "", "", "", "", "");
$warmingUpCan3 = array("", "", "", "", "", "", "", "", "", "", "", "");
$warmingUpCan4 = array("", "", "", "", "", "", "", "", "", "", "", "");
$warmingUpAnsCan1 = array("", "", "", "", "", "", "", "", "", "", "", "");
$warmingUpAnsCan2 = array("", "", "", "", "", "", "", "", "", "", "", "");
$warmingUpAnsCan3 = array("", "", "", "", "", "", "", "", "", "", "", "");
$warmingUpAnsCan4 = array("", "", "", "", "", "", "", "", "", "", "", "");

// PASSING THE OBSTACLE
$obstacleQues = array("", "", "", "");
$obstacleRow = array("", "", "", "");
$obstacleRowStart = array(0, 0, 0, 0);
$obstacleRowEnd = array(0, 0, 0, 0);
$obstacleQuesCentrePiece = "";
$obstacleAnsCentrePiece = "";
$obstacleNumOfLetter = 0;
$obstacleClueImg = "";
$obstacleAdvenQues = "";
$obstacleAdvenAns = "";

// ACCELERATION
$acceQues = array("", "", "", "");
$acceAns = array("", "", "", "");
$acceQues1ImgArray = array("", "", "", "", "", "", "", "");
$acceQues2Img = "";
$acceQues3ImgArray = array("", "", "");;
$acceQues4Img = "";

// FINISHING
$finishCan1 = array("", "", "", "", "", "", "", "", "");
$finishCan2 = array("", "", "", "", "", "", "", "", "");
$finishCan3 = array("", "", "", "", "", "", "", "", "");
$finishCan4 = array("", "", "", "", "", "", "", "", "");
$finishAnsCan1 = array("", "", "", "", "", "", "", "", "");
$finishAnsCan2 = array("", "", "", "", "", "", "", "", "");
$finishAnsCan3 = array("", "", "", "", "", "", "", "", "");
$finishAnsCan4 = array("", "", "", "", "", "", "", "", "");

// EXTRA SECTION
$extraQues = array("", "", "");
$extraAns = array("", "", "");

/////////////////////////////// GET QUESTIONS FROM HTML FORM
// GET NAME OF DB
$nameOfDb = $_POST["nameOfDb"];
// WARMING UP
$nameQuesWarmingUp = "";
$nameQuesFinish = "";
// control variable
$i = 0;
$j = 0;
// Get Warming-up question for candidate 1
for ($i = 1; $i < 13; $i++) {
    $nameQuesWarmingUp = "wu1ques" . $i;
    $nameAnsWarmingUp = "wu1ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesWarmingUp;
    $y = (string)$nameAnsWarmingUp;
    $warmingUpCan1[$i - 1] = $_POST[$x];
    $warmingUpAnsCan1[$i - 1] = $_POST[$y];
}

// Get Warming-up question for candidate 2
for ($i = 1; $i < 13; $i++) {
    $nameQuesWarmingUp = "wu2ques" . $i;
    $nameAnsWarmingUp = "wu2ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesWarmingUp;
    $y = (string)$nameAnsWarmingUp;
    $warmingUpCan2[$i - 1] = $_POST[$x];
    $warmingUpAnsCan2[$i - 1] = $_POST[$y];
}

// Get Warming-up question for candidate 3
for ($i = 1; $i < 13; $i++) {
    $nameQuesWarmingUp = "wu3ques" . $i;
    $nameAnsWarmingUp = "wu3ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesWarmingUp;
    $y = (string)$nameAnsWarmingUp;
    $warmingUpCan3[$i - 1] = $_POST[$x];
    $warmingUpAnsCan3[$i - 1] = $_POST[$y];
}

// Get Warming-up question for candidate 4
for ($i = 1; $i < 13; $i++) {
    $nameQuesWarmingUp = "wu4ques" . $i;
    $nameAnsWarmingUp = "wu4ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesWarmingUp;
    $y = (string)$nameAnsWarmingUp;
    $warmingUpCan4[$i - 1] = $_POST[$x];
    $warmingUpAnsCan4[$i - 1] = $_POST[$y];
}

// PASSING THE OBSTACLE

// Get obstacle questions
for ($i = 1; $i < 5; $i++) {
    $nameQuesObs = "obsQues" . $i;
    $x = (string)$nameQuesObs; // convert name of input ques to string
    $obstacleQues[$i - 1] = $_POST[$x];
}

$obstacleQuesCentrePiece = $_POST["obsQuesCentrePiece"]; // get question at centre piece of clue image
$obstacleAnsCentrePiece = $_POST["obsAnsCentrePiece"]; // get ans at centre piece of clue image
$obstacleNumOfLetter = $_POST["obsLetter"]; // get num of letter of obstacle
$obstacleAns = $_POST["obsAns"]; // get obstacle key
$obstacleAdvenQues = $_POST["obsQuesAdven"];
$obstacleAdvenAns = $_POST["obsAnsAdven"];
// Get obstacle row answers
for ($i = 1; $i < 5; $i++) {
    $nameRowObs = "obsRow" . $i;
    $x = (string)$nameRowObs; // convert name of input ques to string
    $obstacleRow[$i - 1] = $_POST[$x];
}

// Get obstacle row starts
for ($i = 1; $i < 5; $i++) {
    $nameRowStart = "start" . $i;
    $x = (string)$nameRowStart; // convert name of input ques to string
    $obstacleRowStart[$i - 1] = (int)$_POST[$x];
}

// Get obstacle row ends
for ($i = 1; $i < 5; $i++) {
    $nameRowEnd = "end" . $i;
    $x = (string)$nameRowEnd; // convert name of input ques to string
    $obstacleRowEnd[$i - 1] = (int)$_POST[$x];
}


$obstacleAns = $_POST["obsAns"]; // get obstacle answer key
$obstacleNumOfLetter = (int)$_POST["obsLetter"]; // get obstacle's number of letters
$obstacleClueImg = $_POST["ObsImg"]; // get clue image link

// ACCELERATION
// Get acceleration questions
for ($i = 1; $i < 5; $i++) {
    $nameAcceQues = "acceQues" . $i;
    $nameAcceAns = "acceAns" . $i;
    // convert name of input ques to string
    $x = (string)$nameAcceQues;
    $y = (string)$nameAcceAns;
    $acceQues[$i - 1] = $_POST[$x];
    $acceAns[$i - 1] = $_POST[$y];
}
// Get image links for ques 1
for ($i = 1; $i < 9; $i++) {
    $nameAcceQues1 = "img1" . $i;
    $x = (string)$nameAcceQues1; // convert name of input ques to string
    $acceQues1ImgArray[$i - 1] = (string)$_POST[$x];
}

$acceQues2Img = (string)$_POST["img2"]; // get image link for ques 2

// Get image links for ques 3
for ($i = 1; $i < 4; $i++) {
    $nameAcceQues3 = "img3" . $i;
    $x = (string)$nameAcceQues3; // convert name of input ques to string
    $acceQues3ImgArray[$i - 1] = (string)$_POST[$x];
}

$acceQues4Img = (string)$_POST["img4"]; // get image link for ques 2
// FINISHING
// Get finishing question for candidate 1
for ($i = 1; $i < 10; $i++) {
    $nameQuesFinish = "can1ques" . $i;
    $nameAnsFinish = "can1ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesFinish;
    $y = (string)$nameAnsFinish;
    $finishCan1[$i - 1] = $_POST[$x];
    $finishAnsCan1[$i - 1] = $_POST[$y];
}

// Get finishing question for candidate 2
for ($i = 1; $i < 10; $i++) {
    $nameQuesFinish = "can2ques" . $i;
    $nameAnsFinish = "can2ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesFinish;
    $y = (string)$nameAnsFinish;
    $finishCan2[$i - 1] = $_POST[$x];
    $finishAnsCan2[$i - 1] = $_POST[$y];
}

// Get finishing question for candidate 3
for ($i = 1; $i < 10; $i++) {
    $nameQuesFinish = "can3ques" . $i;
    $nameAnsFinish = "can3ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesFinish;
    $y = (string)$nameAnsFinish;
    $finishCan3[$i - 1] = $_POST[$x];
    $finishAnsCan3[$i - 1] = $_POST[$y];
}

// Get finishing question for candidate 4
for ($i = 1; $i < 10; $i++) {
    $nameQuesFinish = "can4ques" . $i;
    $nameAnsFinish = "can4ans" . $i;
    // convert name of input ques to string
    $x = (string)$nameQuesFinish;
    $y = (string)$nameAnsFinish;
    $finishCan4[$i - 1] = $_POST[$x];
    $finishAnsCan4[$i - 1] = $_POST[$y];
}

// Get extra questions and answers
for ($i = 1; $i < 4; $i++) {
    $nameExtraQues = "extra" . $i;
    $nameExtraAns = "extraAns" . $i;
    // convert name of input ques to string
    $x = (string)$nameExtraQues;
    $y = (string)$nameExtraAns;
    $extraQues[$i - 1] = $_POST[$x];
    $extraAns[$i - 1] = $_POST[$y];
}


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

$sql = "CREATE DATABASE $nameOfDb";

// Check if db has been created successfully
if ($conn->query($sql) === true) {
    echo "Database created Succesfully" . "<br>";
} else {
    echo "Database creating failed." . $conn->connect_error . "<br>";
}

$conn = new mysqli($servername, $username, $password, $nameOfDb);

// Create warming-up table
$sql = "CREATE TABLE warmingUp (
    quesInd INT(2) PRIMARY KEY,
    candidate INT(1),
    question VARCHAR(300) NOT NULL,
    answer VARCHAR(100) NOT NULL
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Warming-up table created Succesfully" . "<br>";
} else {
    echo "Warming-up table creating failed." . $conn->connect_error . "<br>";
}

// Create Obstacle table
$sql = "CREATE TABLE obstacle (
    row INT(1) PRIMARY KEY,
    question VARCHAR(300) NOT NULL,
    answer VARCHAR(30),
    rowStart INT(2),
    rowEnd INT(2)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Obstacle table created Succesfully" . "<br>";
} else {
    echo "Obstacle table creating failed." . $conn->connect_error . "<br>";
}

// Create Acceleration table
$sql = "CREATE TABLE acceleration (
    imgInd INT(2) PRIMARY KEY,
    questionNum INT(1),
    question VARCHAR(300) NOT NULL,
    answer VARCHAR(50) NOT NULL,
    imageLink VARCHAR(200) NOT NULL
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Acceleration table created Succesfully" . "<br>";
} else {
    echo "Acceleration table creating failed." . $conn->connect_error . "<br>";
}

// Create Finishing table
$sql = "CREATE TABLE finishing (
    quesInd INT(2) PRIMARY KEY NOT NULL,
    candidate INT(1),
    question VARCHAR(300) NOT NULL,
    answer VARCHAR(500) NOT NULL
)";

if ($conn->query($sql) === true) {
    echo "Finishing table created Succesfully" . "<br>";
} else {
    echo "Finishing table table creating failed." . $conn->connect_error . "<br>";
}


// Extra sections table

$sql = "CREATE TABLE extraQues (
    candInd INT(1) PRIMARY KEY ,
    ques VARCHAR(500),
    ans VARCHAR(50),
    granted INT(1),
    allowed INT(1),
    registered INT(1)
)";

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Extra section table created Succesfully" . "<br>";
} else {
    echo "Extra section table creating failed." . $conn->connect_error . "<br>";
}

// Check if table has been created successfully
if ($conn->query($sql) === true) {
    echo "Finishing table created Succesfully" . "<br>";
} else {
    echo "Finishing table creating failed." . $conn->connect_error . "<br>";
}
//////////////// Create candidate's ans tables


// INSERT WARMING UP QUESTIONS
$quesInd = 1;
for ($i = 1; $i < 5; $i++) {
    for ($j = 0; $j < 12; $j++) {
        if ($i == 1) $sql = "INSERT INTO warmingup (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$warmingUpCan1[$j]', '$warmingUpAnsCan1[$j]')";
        if ($i == 2) $sql = "INSERT INTO warmingup (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$warmingUpCan2[$j]', '$warmingUpAnsCan2[$j]')";
        if ($i == 3) $sql = "INSERT INTO warmingup (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$warmingUpCan3[$j]', '$warmingUpAnsCan3[$j]')";
        if ($i == 4) $sql = "INSERT INTO warmingup (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$warmingUpCan4[$j]', '$warmingUpAnsCan4[$j]')";
        $quesInd++;
        if ($conn->query($sql) === true) {
            if ($j == 11) echo "Warming up question for candidate " . $i . " created Succesfully" . "<br>";
        } else {
            if ($j == 11) echo "Warming up question for candidate " . $i . " created failed" . $conn->connect_error . "<br>";
        }
    }

}


// INSERT OBSTACLE QUESTIONS
for ($i = 0; $i < 4; $i++) {
    $k = $i + 1;
    $sql = "INSERT INTO obstacle (row, question, answer, rowStart, rowEnd)
            VALUES ('$k', '$obstacleQues[$i]', '$obstacleRow[$i]', '$obstacleRowStart[$i]', '$obstacleRowEnd[$i]')";

    if ($conn->query($sql) === true) {
        if ($i == 3) echo "Obs question " . $k . " created Succesfully" . "<br>";
    } else {
        if ($i == 3) echo "Obs question " . $k . " created failed" . $conn->connect_error . "<br>";
    }

}

$sql = "INSERT INTO obstacle (row, question, answer, rowStart, rowEnd)
            VALUES ('5', '$obstacleQuesCentrePiece', '$obstacleAnsCentrePiece', '0', '0')";

if ($conn->query($sql) === true) {
    if ($i == 3) echo "Obs centre question " . $k . " created Succesfully" . "<br>";
} else {
    if ($i == 3) echo "Obs centre question " . $k . " created failed" . $conn->connect_error . "<br>";
}

$sql = "INSERT INTO obstacle (row, question, answer, rowStart, rowEnd)
            VALUES ('6', 'CNV', '$obstacleAns', '0', '$obstacleNumOfLetter')";

if ($conn->query($sql) === true) {
    if ($i == 3) echo "Obs ans " . $k . " created Succesfully" . "<br>";
} else {
    if ($i == 3) echo "Obs ans " . $k . " created failed" . $conn->connect_error . "<br>";
}

$sql = "INSERT INTO obstacle (row, question, answer, rowStart, rowEnd)
            VALUES ('7', '$obstacleAdvenQues', '$obstacleAdvenAns', '0', '0')";

if ($conn->query($sql) === true) {
    if ($i == 3) echo "Adven ques and ans " . $k . " created Succesfully" . "<br>";
} else {
    if ($i == 3) echo "Adven ques and ans " . $k . " created failed" . $conn->connect_error . "<br>";
}

$sql = "INSERT INTO acceleration (imgInd, questionNum, question, answer, imageLink)
                    VALUES ('14', '5', 'Obstacle Image','', '$obstacleClueImg')";

if ($conn->query($sql) === true) {
    echo "Obs clue image created Succesfully" . "<br>";
} else {
    echo "Obs clue image created failed" . $conn->connect_error . "<br>";
}
// INSERT ACCELERATION QUESTIONS
$quesInd = 1;
for ($i = 1; $i < 5; $i++) {
    if ($i == 1) {
        $k = $i - 1;
        for ($j = 0; $j < 8; $j++) {
            $sql = "INSERT INTO acceleration (imgInd, questionNum, question, answer, imageLink)
                    VALUES ('$quesInd', '$i', '$acceQues[0]', '$acceAns[0]', '$acceQues1ImgArray[$j]')";
            $quesInd++;
            if ($conn->query($sql) === true) {
                if ($j == 7) echo "Acceleration question " . $i . " created Succesfully" . "<br>";
            } else {
                if ($j == 7) echo "Acceleration question " . $i . " created failed" . $conn->connect_error . "<br>";
            }
        }
    }

    if ($i == 2) {
        $sql = "INSERT INTO acceleration (imgInd, questionNum, question, answer, imageLink)
                    VALUES ('$quesInd', '$i', '$acceQues[1]', '$acceAns[1]', '$acceQues2Img')";
        $quesInd++;
        if ($conn->query($sql) === true) {
            echo "Acceleration question " . $i . " created Succesfully" . "<br>";
        } else {
            echo "Acceleration question " . $i . " created failed" . $conn->connect_error . "<br>";
        }
    }

    if ($i == 3) {
        $k = $i - 1;
        for ($j = 0; $j < 3; $j++) {
            $sql = "INSERT INTO acceleration (imgInd, questionNum, question, answer, imageLink)
                    VALUES ('$quesInd', '$i', '$acceQues[2]', '$acceAns[2]', '$acceQues1ImgArray[$j]')";
            $quesInd++;

            if ($conn->query($sql) === true) {
                if ($j == 2) echo "Acceleration question " . $i . " created Succesfully" . "<br>";
            } else {
                if ($j == 2) echo "Acceleration question " . $i . " created failed" . $conn->connect_error . "<br>";
            }

        }
    }

    if ($i == 4) {
        $sql = "INSERT INTO acceleration (imgInd, questionNum, question, answer, imageLink)
                    VALUES ('$quesInd', '$i', '$acceQues[3]', '$acceAns[3]', '$acceQues4Img')";
        $quesInd++;
        if ($conn->query($sql) === true) {
            echo "Acceleration question " . $i . " created Succesfully" . "<br>";
        } else {
            echo "Acceleration question " . $i . " created failed" . $conn->connect_error . "<br>";
        }
    }

}
// INSERT FINISHING QUESTIONS
$quesInd = 1;
for ($i = 1; $i < 5; $i++) {
    for ($j = 0; $j < 9; $j++) {
        if ($i == 1) $sql = "INSERT INTO finishing (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$finishCan1[$j]', '$finishAnsCan1[$j]')";
        if ($i == 2) $sql = "INSERT INTO finishing (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$finishCan2[$j]', '$finishAnsCan2[$j]')";
        if ($i == 3) $sql = "INSERT INTO finishing (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$finishCan3[$j]', '$finishAnsCan3[$j]')";
        if ($i == 4) $sql = "INSERT INTO finishing (quesInd, candidate, question, answer) VALUES ('$quesInd', '$i', '$finishCan4[$j]', '$finishAnsCan4[$j]')";
        $quesInd++;

        if ($conn->query($sql) === true) {
            if ($j == 8) echo "Finishing question for candidate" . $i . "created Succesfully" . "<br>";
        } else {
            if ($j == 8) echo "Finishing question for candidate" . $i . "created failed" . $conn->connect_error . "<br>";
        }
    }
}

// INSERT EXTRA QUESTIONS
for ($candInd = 1; $candInd < 4; $candInd++) {
    $k = $candInd - 1;
    $sql = "INSERT INTO extraques (candInd, ques, ans, granted, allowed, registered) VALUES ('$candInd', '$extraQues[$k]', '$extraAns[$k]', '0', '0', '0')";
    if ($conn->query($sql) === true) {
        if ($candInd == 3) echo "Extra ques and ans created Succesfully" . "<br>";
    } else {
        if ($candInd == 3) echo "Extra ques and ans created failed" . $conn->connect_error . "<br>";
    }
}

$sql = "INSERT INTO extraques (candInd, ques, ans, granted, allowed, registered) VALUES (4, '', '', '0', '0', '0')";
if ($conn->query($sql) === true) {
    echo "Extra ques and ans 2 created Succesfully" . "<br>";
} else {
    echo "Extra ques and ans 2 created failed" . $conn->connect_error . "<br>";
}
?>
