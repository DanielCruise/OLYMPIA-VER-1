<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'olympia_1';
$i = 0;
$ques1 = array("", "", "", "", "", "", "", "", "", "", "", "");
$ques2 = array("", "", "", "", "", "", "", "", "", "", "", "");
$ques3 = array("", "", "", "", "", "", "", "", "", "", "", "");
$ques4 = array("", "", "", "", "", "", "", "", "", "", "", "");
$ans1 = array("", "", "", "", "", "", "", "", "", "", "", "");
$ans2 = array("", "", "", "", "", "", "", "", "", "", "", "");
$ans3 = array("", "", "", "", "", "", "", "", "", "", "", "");
$ans4 = array("", "", "", "", "", "", "", "", "", "", "", "");
$nameArray = array("", "", "", "");

// create connection

$conn = new mysqli($servername, $username, $password, $dbName);

$quesInd = 0;
for ($quesInd = 1; $quesInd < 49; $quesInd++) {
    $sql = "SELECT * FROM warmingup where quesInd = '$quesInd'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["candidate"] == '1') {
        $ques1[$i] = $row["question"];
        $ans1[$i] = $row["answer"];
    }
    if ($row["candidate"] == '2') {
        $ques2[$i] = $row["question"];
        $ans2[$i] = $row["answer"];
    }
    if ($row["candidate"] == '3') {
        $ques3[$i] = $row["question"];
        $ans3[$i] = $row["answer"];
    }
    if ($row["candidate"] == '4') {
        $ques4[$i] = $row["question"];
        $ans4[$i] = $row["answer"];
    }
    $i++;
    if ($i == 12) $i = 0;
}

$assoArray1 = array_combine($ques1, $ans1);
$assoArray2 = array_combine($ques2, $ans2);
$assoArray3 = array_combine($ques3, $ans3);
$assoArray4 = array_combine($ques4, $ans4);

for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM candidate where candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["candInd"] == '1') $nameArray[0] = $row["nameCan"];
    if ($row["candInd"] == '2') $nameArray[1] = $row["nameCan"];
    if ($row["candInd"] == '3') $nameArray[2] = $row["nameCan"];
    if ($row["candInd"] == '4') $nameArray[3] = $row["nameCan"];
}

// shuffle ques arrays
$temp = array();
$key = array_keys($assoArray1);

shuffle($key);

for ($i = 0; $i < 12; $i++) {
   $ques1[$i] = $key[$i];
}

$i = 0;
foreach ($key as $tempKey) {
    $ans1[$i] = $assoArray1[$tempKey];
    $i++;
}

for ($i = 0; $i < 12; $i++) {
    echo $ques1[$i] . " " . $ans1[$i] . "<br>";
}

/*$key = array_keys($assoArray2);
shuffle($key);
foreach ($key as $tempKey) {
    $temp[$tempKey] = $assoArray2[$tempKey];
    $assoArray2 = $temp;
}

$key = array_keys($assoArray3);
shuffle($key);
foreach ($key as $tempKey) {
    $temp[$tempKey] = $assoArray3[$tempKey];
    $assoArray3 = $temp;
}

$key = array_keys($assoArray4);
shuffle($key);
foreach ($key as $tempKey) {
    $temp[$tempKey] = $assoArray4[$tempKey];
    $assoArray4 = $temp;
}*/

/*for ($i = 0; $i < 12; $i++) {
    echo $ques1[$i] . " " . $ans1[$i] . "<br>";
}
*/

$i = 0;
foreach ($assoArray1 as $x => $x_val) {
    $ques1[$i] = $x;
    $ans1[$i] = $x_val;
    $i++;
}

$i = 0;
foreach ($assoArray2 as $x => $x_val) {
    $ques2[$i] = $x;
    $ans2[$i] = $x_val;
    $i++;
}

$i = 0;
foreach ($assoArray3 as $x => $x_val) {
    $ques3[$i] = $x;
    $ans3[$i] = $x_val;
    $i++;
}

$i = 0;
foreach ($assoArray4 as $x => $x_val) {
    $ques4[$i] = $x;
    $ans4[$i] = $x_val;
    $i++;
}

/*for ($i = 0; $i < 12; $i++) {
    echo $ques1[$i] . " " . $ans1[$i] . "<br>";
}*/
$conn->close();
?>