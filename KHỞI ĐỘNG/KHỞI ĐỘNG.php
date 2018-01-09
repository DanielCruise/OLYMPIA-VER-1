<!DOCTYPE html>
<html>
<head>
    <title>KHỞI ĐỘNG</title>
    <meta charset="utf-8">

    <script src="jquery-3.2.1.min.js"></script>
    <style>
        @font-face {
            font-family: myFirstFont;
            src: url(BDP_FOX.ttf);
        }

        body {
            text-align: center;
            background-image: url("background.png");
            background-size: cover;
        }

        #main-can {
            position: fixed;
            display: block;
            font-family: Cambria;
            color: white;
            font-size: 100px;
            font-weight: bold;
            margin-top: 20%;
            width: 100%;
            height: auto;
            text-align: center;
            cursor: pointer;
        }

        .candidate {
            position: fixed;
            width: 930.2px;
            height: 23.9px;
            display: flex;
            margin-top: 500px;
            margin-left: 91px;
            cursor: pointer;
        }

        #can1, #can2, #can3, #can4 {
            font-family: Arial;
            color: white;
            margin-left: 6.25px;
            font-size: 20px;
            height: 23.9px;
            width: 226.9px;
            text-align: center;
            padding: 9.95px 0;
            font-weight: bold;
            cursor: pointer;
        }

        #can2, #can3, #can4 {
            opacity: 0.7;
            background-color: black;
            cursor: pointer;
        }

        #pt {
            position: fixed;
            box-sizing: border-box;
            font-family: myFirstFont;
            font-weight: bold;
            margin-left: 77%;
            margin-top: 41.5%;
            color: #0088FF;
            font-size: 85px;
            height: 106.25px;
            width: 183.75px;
            cursor: pointer;
        }

        #ques {
            position: fixed;
            font-family: Arial;
            color: white;
            font-size: 25px;
            height: 20px;
            width: 925px;
            text-align: left;
            padding-bottom: 75px;
            padding-left: 12.5px;
            font-weight: bold;
            padding-top: 10px;
            margin-top: 562.5px;
            margin-left: 95px;
            cursor: pointer;
        }

        #timer {
            width: 925px;
            margin-top: 672px;
            margin-left: -582px;
            position: fixed;
            cursor: pointer;
        }

        #video-background {
            /*  making the video fullscreen  */
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
        }

        #warmupVid {
            /*  making the video fullscreen  */
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 100;
        }

        .Menu {
            position: relative;
            color: white;
            font-family: Arial;
            font-weight: bold;
            display: inline-block;
            float: right;
            width: 30px;
            z-index: 50;
            cursor: pointer;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 250px;
            right: 0;
            text-align: right;
            border: 1px solid yellow;
            box-shadow: black 3px 3px;
            background-color: gray;
            cursor: pointer;
        }

        .Menu:hover .dropdown-content {
            display: block;
        }

        .dropdown-content p {
            margin: 0;
            border: 1px solid black;
            padding: 10px 10px;
            height: 30px;
            box-sizing: border-box;
        }

        .dropdown-content p:hover {
            display: block;
            color: white;
            font-size: 15px;
            background-color: black;
            opacity: 1;
        }

        #topCand {
            margin-top: -20px;
            margin-left: -50px;
            justify-content: center;
            display: flex;
            align-items: center;
            position: fixed;
            font-family: Arial;
            color: white;
            font-weight: bold;
            width: 1300px;
        }

        #topCand p {
            border-box;
            box-sizing;
            width: 250px;
            padding: 10px 20px;
            margin-left: 100px;
            background-color: blue;
            border: 2px solid white;
            font-size: 20px;
        }

        #topPoint {
            margin-top: -40px;
            margin-left: -50px;
            justify-content: center;
            display: flex;
            align-items: center;
            position: fixed;
            font-family: Arial;
            color: white;
            font-weight: bold;
            width: 1300px;

        }

        #topPoint p {
            width: 250px;
            margin-left: 100px;
            background-color: black;
            border: 2px solid white;
            font-size: 100px;
        }

        #status {
            position: fixed;
            font-size: 80px;
            color: white;
            font-family: Cambria;
            margin-top: 450px;
            margin-left: 1075px;
            font-weight: bold;
        }

        .sub {
            opacity: 0;
            position: fixed;
            background-color: red;
            margin-top: 180px;
            margin-left: 50px;
            height: 50px;
            width: 112.5px;
            z-index: 200;
        }

        #pt2sub10 {
            margin-left: 375px;
        }

        #pt3sub10 {
            margin-left: 700px;
        }

        #pt4sub10 {
            margin-left: 1025px;
        }

        .plus {
            opacity: 0;
            position: fixed;
            background-color: green;
            margin-top: 180px;
            margin-left: 162.5px;
            height: 50px;
            width: 112.5px;
            z-index: 200;
        }

        #pt2plus10 {
            margin-left: 487.5px;
        }

        #pt3plus10 {
            margin-left: 812.5px;
        }

        #pt4plus10 {
            margin-left: 1137.5px;
        }
    </style>
</head>
<body>
<p id="main-can" onclick="start()">KHỞI ĐỘNG</p>
<section id="info">
    <section class="candidate">
        <p class="minorName" id="can1" onclick="wrongAns()"></p>
        <p class="minorName" id="can2" onclick="wrongAns()"></p>
        <p class="minorName" id="can3" onclick="wrongAns()"></p>
        <p class="minorName" id="can4" onclick="wrongAns()"></p>
    </section>

    <p id="pt" onclick="addPt()">0</p>
    <p id="ques" onclick="nextQues()"></p>
    <video id="timer" onclick="stopTimer()">
        <source src="Media1.mp4" type="video/mp4">
    </video>
    <p id="status">0/1</p>
</section>
<section id="modifyPoint">
    <p class="sub" id="pt1sub10" onclick="plusOrSub10(1, -10)">x</p>
    <p class="sub" id="pt2sub10" onclick="plusOrSub10(2, -10)">x</p>
    <p class="sub" id="pt3sub10" onclick="plusOrSub10(3, -10)">x</p>
    <p class="sub" id="pt4sub10" onclick="plusOrSub10(4, -10)">x</p>
    <p class="plus" id="pt1plus10" onclick="plusOrSub10(1, 10)">v</p>
    <p class="plus" id="pt2plus10" onclick="plusOrSub10(2, 10)">v</p>
    <p class="plus" id="pt3plus10" onclick="plusOrSub10(3, 10)">v</p>
    <p class="plus" id="pt4plus10" onclick="plusOrSub10(4, 10)">v</p>
</section>
<section id="pointTop">
    <div id="topCand">
        <p class="minorCand">THÍ SINH 1</p>
        <p class="minorCand">THÍ SINH 2</p>
        <p class="minorCand">THÍ SINH 3</p>
        <p class="minorCand">THÍ SINH 4</p>
    </div>
    <div id="topPoint">
        <p class="minorPoint">0</p>
        <p class="minorPoint">0</p>
        <p class="minorPoint">0</p>
        <p class="minorPoint">0</p>
    </div>
</section>
<video id="warmupVid" autoplay>
    <source src="WarmupVideo.mp4" type="video/mp4">
</video>
<audio id="audioTimer" style="display: none;">
    <source src="60s.mp3" type="audio/mp3">
</audio>
<audio id="startTime" style="display: none;">
    <source src="111.wav" type="audio/wav">
</audio>
<audio id="startAudio" style="display: none;">
    <source src="StartStart.mp3" type="audio/mp3">
</audio>
<video id="video-background">
    <source src="start.mp4" type="video/mp4">
</video>
<div class="Menu">
    <p class="dropdown">=</p>
    <div class="dropdown-content">
        <p onclick="hideInfo()">THÍ SINH TIẾP THEO</p>
        <p onclick="updatePoint()">CẬP NHẬT ĐIỂM</p>
        <p><a href="/OLYMPIA/TỔNG KẾT ĐIỂM/TỔNG KẾT ĐIỂM.php" style="text-decoration: none; color: white">TỔNG KẾT
                ĐIỂM</a></p>
    </div>
</div>

<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';
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
$codeDb = "";

// create connection

$conn = new mysqli($servername, $username, $password, 'candidate');
$sql = "SELECT * FROM candidate WHERE candInd = '1'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$codeDb = $row["code"];

for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM candidate where candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $nameArray[$i - 1] = $row["nameCan"];
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $codeDb);

for ($quesInd = 1; $quesInd < 49; $quesInd++) {
    $sql = "SELECT * FROM warmingup WHERE quesInd = '$quesInd'";
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

function shuffleQues($assoArray, $ques, $ans)
{
    $key = array_keys($assoArray);
    shuffle($key);

    for ($i = 0; $i < 12; $i++) {
        $ques[$i] = $key[$i];
    }

    $i = 0;
    foreach ($key as $tempKey) {
        $ans[$i] = $assoArray[$tempKey];
        $i++;
    }
}

shuffleQues($assoArray1, $ques1, $ans1);
shuffleQues($assoArray2, $ques2, $ans2);
shuffleQues($assoArray3, $ques3, $ans3);
shuffleQues($assoArray4, $ques4, $ans4);

$conn->close();
?>

<script type="text/javascript">
    var pointTop = document.getElementsByClassName("minorPoint");
    var blueCand = document.getElementsByClassName('minorCand');
    var mainCan = document.getElementById('main-can');
    var mainPoint = document.getElementById('pt');
    var questionPane = document.getElementById('ques');
    var cands = document.getElementsByClassName('minorName');
    var timer = document.getElementById('timer');
    var audioTimer = document.getElementById('audioTimer');
    var startTime = document.getElementById('startTime');
    var rightAnsRating = document.getElementById('status');
    var ready = document.getElementById('video-background');
    var currentTurn = 0, quesIndex = 0, numOfRightAns = 0, questionNum = 1;
    var point = [0, 0, 0, 0];
    var candidate = <?php echo json_encode($nameArray);?>;
    var quesCan1 = <?php echo json_encode($ques1);?>;
    var quesCan2 = <?php echo json_encode($ques2);?>;
    var quesCan3 = <?php echo json_encode($ques3);?>;
    var quesCan4 = <?php echo json_encode($ques4);?>;
    var ansCan1 = <?php echo json_encode($ans1);?>;
    var ansCan2 = <?php echo json_encode($ans2);?>;
    var ansCan3 = <?php echo json_encode($ans3);?>;
    var ansCan4 = <?php echo json_encode($ans4);?>;
    var ques = [quesCan1, quesCan2, quesCan3, quesCan4];
    var ans = [ansCan1, ansCan2, ansCan3, ansCan4];

    currentQues("", 0, "");
    setTimeout(goOnWarmup, 6000);
    $(document).ready(function () {
        $("#info").hide();
    });
    for (var i = 0; i < 4; i++) {
        blueCand[i].innerHTML = candidate[i];
    }

    function addPt() {
        point[currentTurn - 1] += 10;
        numOfRightAns++;
        rightAnsRating.innerHTML = numOfRightAns + "/" + questionNum;
        mainPoint.innerHTML = point[currentTurn - 1];
        pointTop[currentTurn - 1].innerHTML = point[currentTurn - 1];
        var audio = new Audio("StartRight.wav");
        var finishStart = new Audio("StartFinish.mp3");

        if (point[currentTurn - 1] <= 120) audio.play();
        else {
            point[currentTurn - 1] = 120;
            numOfRightAns = 12;
            questionNum = 12;
            rightAnsRating.innerHTML = numOfRightAns + "/" + questionNum;
            document.getElementById("pt").innerHTML = point[currentTurn - 1];
            pointTop[currentTurn - 1].innerHTML = point[currentTurn - 1];
            restartTime();
            finishStart.play();
        }
    }

    function nextQues() {
        quesIndex++;
        questionNum++;
        rightAnsRating.innerHTML = numOfRightAns + "/" + questionNum;
        questionPane.innerHTML = ques[currentTurn - 1][quesIndex];
        currentQues(questionPane.innerHTML, currentTurn, ans[currentTurn - 1][quesIndex]);

        if (quesIndex > 11) {
            quesIndex = 11;
            questionNum = 12;
            rightAnsRating.innerHTML = numOfRightAns + "/" + questionNum;
            document.getElementById("ques").innerHTML = "";
            currentQues("", 0, "");
            var finishStart = new Audio("StartFinish.mp3");
            restartTime();
            finishStart.play();
        }
    }

    function wrongAns() {
        var wrong = new Audio("StartWrong.wav");
        wrong.play();
    }

    function stopTimer() {
        var finishStart = new Audio("StartFinish.mp3");
        restartTime();
        finishStart.play();
    }

    function start() {
        if (mainCan.innerHTML == "KHỞI ĐỘNG") {
            mainCan.innerHTML = candidate[0];
            currentTurn++;
            for (var i = 0; i < candidate.length; i++) {
                cands[i].innerHTML = candidate[i];
            }
        } else {
            ready.play();
            questionPane.innerHTML = ques[currentTurn - 1][0];
            setTimeout(function () {
                getInfo();
                currentQues(ques[currentTurn - 1][0], currentTurn, ans[currentTurn - 1][0]);
            }, 7150);
        }
    }

    function getInfo() {
        $(document).ready(function () {
            $("#info").show();
        });
        timer.play();
        audioTimer.play();
        startTime.play();
    }

    function hideInfo() {
        currentQues("", 0, "");
        ready.currentTime = 0;
        $(document).ready(function () {
            $("#info").hide();
        });
        turnOver();
        mainCan.innerHTML = candidate[currentTurn - 1];

    }

    function restartTime() {
        timer.pause();
        timer.currentTime = 0;
        audioTimer.pause();
        audioTimer.currentTime = 0;
    }

    function goOnWarmup() {
        document.getElementById('warmupVid').style.display = 'none';
        document.getElementById('startAudio').play();
    }

    function turnOver() {
        currentTurn++;
        cands[currentTurn - 2].style.backgroundColor = "black";
        cands[currentTurn - 2].style.opacity = "0.7";
        cands[currentTurn - 1].style.backgroundColor = "transparent";
        cands[currentTurn - 1].style.opacity = "1";
        mainPoint.innerHTML = point[currentTurn - 1];
        quesIndex = 0;
        numOfRightAns = 0;
        questionNum = 1;
        rightAnsRating.innerHTML = "0/1";
        cands[currentTurn - 2].innerHTML = candidate[currentTurn - 2] + "(" + point[currentTurn - 2] + ")";
    }

    function updatePoint() {
        $.ajax({
            url: "updatePoint.php",
            type: "POST",
            data: {'pointCan1': point[0], 'pointCan2': point[1], 'pointCan3': point[2], 'pointCan4': point[3]},
            success: function () {
                alert("OK! :)");
            }
        });
    }

    function currentQues(ques, turn, ans) {
        $.ajax({
            url: "uploadCurrentQuestion.php",
            type: "POST",
            data: {'question': ques, 'curCand': turn, 'answer': ans},
            success: function () {
            }
        });
    }

    function plusOrSub10(turn, pt) {
        point[turn - 1] += pt;
        pointTop[turn - 1].innerHTML = point[turn - 1];
        if (mainCan.innerHTML == candidate[turn - 1]) mainPoint.innerHTML = point[turn - 1];
        else cands[turn - 1].innerHTML = candidate[turn - 1] + "(" + point[turn - 1] + ")";
    }

</script>
</body>
</html>