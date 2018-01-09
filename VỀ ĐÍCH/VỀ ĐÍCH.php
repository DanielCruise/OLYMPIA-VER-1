<!DOCTYPE html>
<html>
<head>
    <title>VỀ ĐÍCH</title>
    <meta charset="utf-8">
    <style>
        body {
            background-image: url("Background.png");
            background-size: cover;
            text-align: center;
            font-family: Arial;
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
            margin-left: 82px;
        }

        #can1 {
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
            font-family: Arial;
            color: white;
            margin-left: 6.25px;
            font-size: 20px;
            height: 23.9px;
            width: 226.9px;
            text-align: center;
            padding: 9.95px 0;
            font-weight: bold;
            opacity: 0.7;
            background-color: black;
            cursor: pointer;
        }

        #pt {
            position: fixed;
            box-sizing: border-box;
            font-family: Arial;
            font-weight: bold;
            margin-left: 78.5%;
            margin-top: 41%;
            color: #0088FF;
            font-size: 75px;
            height: 115px;
            width: 175px;
            justify-content: center;
            display: flex;
            align-items: center;
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
            margin-left: 86px;
            cursor: pointer;
        }

        #right, #wrong {
            position: fixed;
            height: 30px;
            width: 30px;
            font-family: Arial;
            background-color: black;
            color: white;
            font-weight: bold;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 700px;
            margin-left: 1100px;
            cursor: pointer;
        }

        #wrong {
            margin-left: 1180px;
        }

        #TimeStart, #countdown {
            position: fixed;
            height: 30px;
            width: 30px;
            font-family: Arial;
            background-color: black;
            color: white;
            font-weight: bold;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 580px;
            margin-left: 1300px;
            cursor: pointer;
        }

        #TimeStart {
            width: 60px;
            margin-top: 590px;
            margin-left: 1290px;
        }

        #countdown {
            margin-top: 650px;
            border: solid 2px black;
            background-color: white;
            color: black;
        }

        #vid10s, #vid15s, #vid20s {
            position: fixed;
            width: 925px;
            margin-top: 672px;
            margin-left: -585px;
        }

        #star {
            position: fixed;
            margin-top: 705px;
            margin-left: 455px;
            height: 50px;
            width: 50px;
            cursor: pointer;
        }

        #starGif {
            position: fixed;
            margin-top: 440px;
            margin-left: -690px;
            height: 140px;
            width: 140px;
            z-index: 200;

        }

        #QuesPack, #Pack40, #Pack60, #Pack80, #OpeningVideo {
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

        #OpeningVideo {
            z-index: 100;
        }

        #choose40, #choose60, #choose80 {
            position: fixed;
            height: 121px;
            width: 170px;
            background-color: black;
            opacity: 0;
            margin-left: 1075px;
            cursor: pointer;
        }

        #choose40 {
            margin-top: 110px;
        }

        #choose60 {
            margin-top: 250px;
        }

        #choose80 {
            margin-top: 395px;
        }

        #Finished {
            position: fixed;
            font-size: 25px;
            justify-content: center;
            display: flex;
            align-items: center;
            background-color: black;
            color: white;
            font-weight: bold;
            font-family: Arial;
            margin-top: 720px;
            margin-left: 1230px;
            padding: 5px;
            cursor: pointer;
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
            margin-top: -10px;
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
            font-size: 70px;
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
        }

        .dropdown-content {
            display: none;
            position: absolute;
            width: 250px;
            right: 0;
            text-align: right;
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
        }

        .sub {
            opacity: 0;
            position: fixed;
            background-color: red;
            margin-top: 143px;
            margin-left: 50px;
            height: 50px;
            width: 112.5px;
            cursor: pointer;
        }

        #pt2sub5 {
            margin-left: 375px;
        }

        #pt3sub5 {
            margin-left: 700px;
        }

        #pt4sub5 {
            margin-left: 1025px;
        }

        .plus {
            opacity: 0;
            position: fixed;
            background-color: green;
            margin-top: 143px;
            margin-left: 162.5px;
            height: 50px;
            width: 112.5px;
            cursor: pointer;
        }

        #pt2plus5 {
            margin-left: 487.5px;
        }

        #pt3plus5 {
            margin-left: 812.5px;
        }

        #pt4plus5 {
            margin-left: 1137.5px;
        }
    </style>
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<audio id="FinishGetScore">
    <source src="FinishGetScore.mp3" type="audio/mp3">
</audio>
<audio id="FinishRightAnswer">
    <source src="FinishRightAnswer.mp3" type="audio/mp3">
</audio>
<audio id="FinishWrongAnswer">
    <source src="FinishWrongAnswer.mp3" type="audio/mp3">
</audio>
<audio id="Grant5s">
    <source src="Finish5Seconds.mp3" type="audio/mp3">
</audio>
<audio id="StarAudio">
    <source src="FinishStarChose.mp3" type="audio/mp3">
</audio>
<audio id="UserStart">
    <source src="FinishUserStart.mp3" type="audio/mp3">
</audio>
<audio id="UserFinish">
    <source src="FinishFinish.mp3" type="audio/mp3">
</audio>
<audio id="FinishStart">
    <source src="FinishStart.mp3" type="audio/mp3">
</audio>

<video id="vid10s" style="visibility: hidden;">
    <source src="10s.mp4" type="video/mp4">
</video>
<video id="vid15s" style="visibility: hidden;">
    <source src="15s.mp4" type="video/mp4">
</video>
<video id="vid20s" style="visibility: hidden;">
    <source src="20s.mp4" type="video/mp4">
</video>
<video id="Pack40" style="visibility: hidden;">
    <source src="Choose40.mp4" type="video/mp4">
</video>
<video id="Pack60" style="visibility: hidden;">
    <source src="Choose60.mp4" type="video/mp4">
</video>
<video id="Pack80" style="visibility: hidden;">
    <source src="Choose80.mp4" type="video/mp4">
</video>
<video id="QuesPack" style="visibility: hidden;">
    <source src="QuesPackShow.mp4" type="video/mp4">
</video>
<video id="OpeningVideo" autoplay>
    <source src="FinishVideo.mp4" type="video/mp4">
</video>

<img id="starGif" src="StarGif.gif" style="visibility: hidden;">

<p id="main-can" onclick="start()" style="font-family: Cambria">VỀ ĐÍCH</p>
<section id="pointTop">
    <div id="topCand">
        <p class="minorCand"></p>
        <p class="minorCand"></p>
        <p class="minorCand"></p>
        <p class="minorCand"></p>
    </div>
    <div id="topPoint">
        <p class="minorPoint">0</p>
        <p class="minorPoint">0</p>
        <p class="minorPoint">0</p>
        <p class="minorPoint">0</p>
    </div>
</section>
<section id="modifyPoint">
    <p class="sub" id="pt1sub5" onclick="change5pts(1, -5)"></p>
    <p class="sub" id="pt2sub5" onclick="change5pts(2, -5)"></p>
    <p class="sub" id="pt3sub5" onclick="change5pts(3, -5)"></p>
    <p class="sub" id="pt4sub5" onclick="change5pts(4, -5)"></p>
    <p class="plus" id="pt1plus5" onclick="change5pts(1, 5)"></p>
    <p class="plus" id="pt2plus5" onclick="change5pts(2, 5)"></p>
    <p class="plus" id="pt3plus5" onclick="change5pts(3, 5)"></p>
    <p class="plus" id="pt4plus5" onclick="change5pts(4, 5)"></p>
</section>
<section class="tempFinishingReference" style="position: fixed; display: none">
    <p class="referFi" id="referFi1"></p>
    <p class="referFi" id="referFi2"></p>
    <p class="referFi" id="referFi3"></p>
    <p class="referFi" id="referFi4"></p>
</section>
<section id="info">
    <section class="candidate">
        <p class="minorName" id="can1" onclick="pointGranting(1)"></p>
        <p class="minorName" id="can2" onclick="pointGranting(2)"></p>
        <p class="minorName" id="can3" onclick="pointGranting(3)"></p>
        <p class="minorName" id="can4" onclick="pointGranting(4)"></p>
    </section>
    <p id="pt">0</p>
    <p id="ques" onclick="nextQues()"></p>
    <p id="right" onclick="rightAns()">R</p>
    <p id="wrong" onclick="wrongAns()">W</p>
    <p id="TimeStart" onclick="playTimeVid()">Time</p>
    <p id="countdown" onclick="grant5s()">5s</p>
    <p id="Finished" onclick="complete()">Complete</p>
    <img id="star" src="Star.png" onclick="starChoose()"/>
</section>
<div class="Menu">
    <p class="buttonDropdown">=</p>
    <div class="dropdown-content">
        <p onclick="postPointToServer()">CẬP NHẬT ĐIỂM</p>
        <p><a href="/OLYMPIA/KẾT QUẢ CHUNG CUỘC/KẾT QUẢ CHUNG CUỘC.php" style="text-decoration: none; color: white">KẾT QUẢ CHUNG CUỘC</a></p>
    </div>
</div>
<p id="choose40" onclick="getPack(pack40, -1)" style="visibility: hidden;"></p>
<p id="choose60" onclick="getPack(pack60, 2)" style="visibility: hidden;"></p>
<p id="choose80" onclick="getPack(pack80, 5)" style="visibility: hidden;"></p>

<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$i = 0;
$nameArray = array("", "", "", "");
$ques1 = array("", "", "", "", "", "", "", "", "");
$ques2 = array("", "", "", "", "", "", "", "", "");
$ques3 = array("", "", "", "", "", "", "", "", "");
$ques4 = array("", "", "", "", "", "", "", "", "");
$ans1 = array("", "", "", "", "", "", "", "", "");
$ans2 = array("", "", "", "", "", "", "", "", "");
$ans3 = array("", "", "", "", "", "", "", "", "");
$ans4 = array("", "", "", "", "", "", "", "", "");
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
    if ($row["candInd"] == '1') {
        $point[0] = (int)$row["point"];
        $nameArray[0] = $row["nameCan"];
    }
    if ($row["candInd"] == '2') {
        $point[1] = (int)$row["point"];
        $nameArray[1] = $row["nameCan"];
    }
    if ($row["candInd"] == '3') {
        $point[2] = (int)$row["point"];
        $nameArray[2] = $row["nameCan"];
    }
    if ($row["candInd"] == '4') {
        $point[3] = (int)$row["point"];
        $nameArray[3] = $row["nameCan"];
    }

}

$conn->close();

$conn = new mysqli($servername, $username, $password, $codeDb);
$quesIndex = 0;
$i = 0;
for ($quesIndex = 1; $quesIndex < 37; $quesIndex++) {
    $sql = "SELECT * FROM finishing WHERE quesInd = '$quesIndex'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["candidate"] == 1) {
        $ques1[$i] = $row["question"];
        $ans1[$i] = $row["answer"];
    }
    if ($row["candidate"] == 2) {
        $ques2[$i] = $row["question"];
        $ans2[$i] = $row["answer"];
    }
    if ($row["candidate"] == 3) {
        $ques3[$i] = $row["question"];
        $ans3[$i] = $row["answer"];
    }
    if ($row["candidate"] == 4) {
        $ques4[$i] = $row["question"];
        $ans4[$i] = $row["answer"];
    }
    $i++;
    if ($i == 9) $i = 0;
}

$conn->close();
?>

<script type="text/javascript">
    var starChosen = false;
    var ready = false;
    var granted = false;
    var quesPointMultiple = 1; // activate when candidate chooses hopeful star.
    var quesIndex; // according to the whole question array.
    var quesLeft = 3;
    var candidate = <?php echo json_encode($nameArray); ?>;
    var point = <?php echo json_encode($point); ?>;
    var quesPoint = [10, 10, 20, 10, 20, 30, 20, 30, 30];
    var currentTurn = 0;
    var topName = document.getElementsByClassName('minorCand');
    var topPoint = document.getElementsByClassName('minorPoint');
    var cands = document.getElementsByClassName('minorName');
    var mainCan = document.getElementById('main-can');
    var mainPoint = document.getElementById('pt');
    var questionPane = document.getElementById('ques');
    var finishRightAnswer = document.getElementById('FinishRightAnswer');
    var finishWrongAnswer = document.getElementById('FinishWrongAnswer');
    var finish5Seconds = document.getElementById('Grant5s');
    var finishGetScore = document.getElementById('FinishGetScore');
    var starAudio = document.getElementById('StarAudio');
    var vid10s = document.getElementById('vid10s');
    var vid15s = document.getElementById('vid15s');
    var vid20s = document.getElementById('vid20s');
    var referFi = document.getElementsByClassName('referFi');
    var quesPackShow = document.getElementById('QuesPack');
    var pack40 = document.getElementById('Pack40');
    var pack60 = document.getElementById('Pack60');
    var pack80 = document.getElementById('Pack80');
    var choose40 = document.getElementById('choose40');
    var choose60 = document.getElementById('choose60');
    var choose80 = document.getElementById('choose80');
    var userStart = document.getElementById('UserStart');
    var userFinish = document.getElementById('UserFinish');

    var quesCan1 = <?php echo json_encode($ques1); ?>;
    var quesCan2 = <?php echo json_encode($ques2); ?>;
    var quesCan3 = <?php echo json_encode($ques3); ?>;
    var quesCan4 = <?php echo json_encode($ques4); ?>;
    var ansCan1 = <?php echo json_encode($ans1); ?>;
    var ansCan2 = <?php echo json_encode($ans2); ?>;
    var ansCan3 = <?php echo json_encode($ans3); ?>;
    var ansCan4 = <?php echo json_encode($ans4); ?>;
    var ques = [quesCan1, quesCan2, quesCan3, quesCan4];
    var ans = [ansCan1, ansCan2, ansCan3, ansCan4];
    var onTurn;

    currentQues("", 0, 0, "");
    setTimeout(goOnFinishing, 6000);

    for (var i = 0; i < 4; i++) {
        topName[i].innerHTML = candidate[i];
        topPoint[i].innerHTML = point[i];
    }
    $(document).ready(function () {
        $("#info").hide();
    })

    function rightAns() {
        finishRightAnswer.play();
        correct(mainCan.innerHTML, onTurn, quesPointMultiple);
    }

    function wrongAns() {
        finishWrongAnswer.play();
        incorrect(mainCan.innerHTML, onTurn);
    }

    function grant5s() {
        resetGrantedPane(1);
        finish5Seconds.play();
        if (!granted) {
            var x = setInterval(receivingGrantedSignal, 10);
            setTimeout(function () {
                resetGrantedPane(0);
                clearInterval(x);
            }, 5000);
        }
        if (quesPointMultiple == 2) wrongAnsWithStar(mainCan.innerHTML);
    }

    function playTimeVid() {
        if (quesPoint[quesIndex] == 10) {
            vid10s.style.visibility = "visible";
            setTimeout(function () {
                controlSection(0);
            }, 10000);
            vid10s.play();
        }

        if (quesPoint[quesIndex] == 20) {
            vid15s.style.visibility = "visible";
            setTimeout(function () {
                controlSection(0);
            }, 15000);
            vid15s.play();
        }

        if (quesPoint[quesIndex] == 30) {
            vid20s.style.visibility = "visible";
            setTimeout(function () {
                controlSection(0);
            }, 20000);
            vid20s.play();
        }
        controlSection(1);
    }


    function starChoose() {
        if (starChosen == false) {
            starAudio.play();
            document.getElementById('starGif').style.visibility = "visible";
            quesPointMultiple = 2;
            starChosen = true;
        } else {
            document.getElementById('starGif').style.visibility = "hidden";
            document.getElementById('star').style.visibility = "hidden";
            quesPointMultiple = 1;
        }
    }

    function start() {
        if (mainCan.innerHTML == "VỀ ĐÍCH") {
            mainCan.innerHTML = candidate[0];
            onTurn = 1;
            currentTurn = 1;
        } else {
            if (ready == false) {
                userStart.play();
                ready = true;
            } else {
                onTurn = getMainTurn(mainCan.innerHTML);
                quesPackShow.style.visibility = "visible";
                choose40.style.visibility = "visible";
                choose60.style.visibility = "visible";
                choose80.style.visibility = "visible";
                quesPackShow.play();
            }
        }
    }

    function infoAppear() {
        $(document).ready(function () {
            $("#info").show();
        });
        document.getElementById('star').style.visibility = 'visible';
    }

    function nextQues() {
        if (quesLeft > 0) {
            quesIndex++;
            questionPane.innerHTML = ques[currentTurn -1][quesIndex];
            currentQues(ques[currentTurn - 1][quesIndex], 2, quesPoint[quesIndex], ans[currentTurn - 1][quesIndex]);
            setTimeout(function () {
                currentQues(ques[currentTurn - 1][quesIndex], 0, quesPoint[quesIndex], ans[currentTurn - 1][quesIndex]);
            }, 1000);
            quesLeft--;
            timeQuesAppear(quesPoint[quesIndex]);
        }
    }


    function complete() {
        currentTurn++;
        starChosen = false;
        userFinish.play();
        quesLeft = 3;
        ready = false;
        quesPackShow.currentTime = 0;
        pack40.currentTime = 0;
        pack60.currentTime = 0;
        pack80.currentTime = 0;
        currentQues("", 0, 0, "");
        $(document).ready(function () {
            $("#info").hide();
        });
        quesPackShow.style.visibility = "hidden";
        pack40.style.visibility = "hidden";
        pack60.style.visibility = "hidden";
        pack80.style.visibility = "hidden";
        vid10s.style.visibility = "hidden";
        vid15s.style.visibility = "hidden";
        vid20s.style.visibility = "hidden";

        mainCan.innerHTML = candidate[currentTurn - 1];
        currentQues("", 0, 0, "");

        turnOver();

    }

    function restartTimeQues() {
        vid10s.currentTime = 0;
        vid15s.currentTime = 0;
        vid20s.currentTime = 0;
    }

    function goOnFinishing() {
        document.getElementById('OpeningVideo').style.visibility = "hidden";
        document.getElementById('FinishStart').play();
    }

    function pointGranting(turn) {
        onTurn = turn;
        if (mainCan.innerHTML != candidate[turn - 1]) {
            granted = true;
            cands[turn - 1].style.backgroundColor = " #ff4000";
            cands[turn - 1].style.opacity = 1;
            finishGetScore.play();
        } else {
            resetGrantedPane(0);
            granted = false;
            for (var i = 0; i <= candidate.length; i++) {
                if (i != turn - 1) {
                    cands[i].style.backgroundColor = "black";
                    cands[i].style.opacity = 0.7;
                }
            }
        }
    }

    function updatePoint(name) {
        var turn, i;
        for (i = 0; i <= candidate.length; i++) {
            if (candidate[i] == name) {
                turn = i + 1;
                break;
            }
        }
        mainPoint.innerHTML = point[i];
        cands[i].innerHTML = candidate[i];
        questionPane.innerHTML = "";
        for (i = 0; i < candidate.length; i++) {
            if (i == turn - 1) {
                continue;
            }
            else {
                cands[i].innerHTML = candidate[i] + "(" + point[i] + ")";
            }
        }
    }

    function postPointToServer() {

        $.ajax({
            url: "updatePoint.php",
            type: "POST",
            data: {'pointCan1': point[0], 'pointCan2': point[1], 'pointCan3': point[2], 'pointCan4': point[3]},
            success: function () {
                alert("OK! :)");
            }
        });
    }


    function incorrect(name, turn) {
        var mainTurn = getMainTurn(name);

        if (mainTurn == turn && quesPointMultiple == 2) {
            wrongAnsWithStar(candidate[mainTurn - 1]);
        } else {
            point[turn - 1] -= quesPoint[quesIndex] / 2;
            if (point[turn - 1] < 0) point[turn - 1] = 0;
            cands[turn - 1].innerHTML = candidate[turn - 1] + "(" + point[turn - 1] + ")";
            topPoint[turn - 1].innerHTML = point[turn - 1];
        }
    }

    function correct(name, turn, multi) {
        var mainTurn = getMainTurn(name);

        if (mainTurn == turn) {
            if (multi == 1) {
                point[mainTurn - 1] += quesPoint[quesIndex];
                mainPoint.innerHTML = point[mainTurn - 1];
                topPoint[mainTurn - 1].innerHTML = point[mainTurn - 1];
            } else {
                point[mainTurn - 1] += quesPoint[quesIndex] * multi;
                mainPoint.innerHTML = point[mainTurn - 1];
                topPoint[mainTurn - 1].innerHTML = point[mainTurn - 1];
            }
        } else {
            if (multi == 1) {
                point[mainTurn - 1] -= quesPoint[quesIndex];
                point[turn - 1] += quesPoint[quesIndex];
                if (point[mainTurn - 1] < 0) point[mainTurn - 1] = 0;
                mainPoint.innerHTML = point[mainTurn - 1];
                topPoint[turn - 1].innerHTML = point[turn - 1];
                topPoint[mainTurn - 1].innerHTML = point[mainTurn - 1];
                cands[turn - 1].innerHTML = candidate[turn - 1] + "(" + point[turn - 1] + ")";
            } else {
                point[turn - 1] += quesPoint[quesIndex];
                cands[turn - 1].innerHTML = candidate[turn - 1] + "(" + point[turn - 1] + ")";
                topPoint[turn - 1].innerHTML = point[turn - 1];
                topPoint[mainTurn - 1].innerHTML = point[mainTurn - 1];
            }
        }
    }

    function turnOver() {
        cands[currentTurn - 2].style.backgroundColor = "black";
        cands[currentTurn - 2].style.opacity = "0.7";
        cands[currentTurn - 1].style.backgroundColor = "transparent";
        cands[currentTurn - 1].style.opacity = "1";
        mainPoint.innerHTML = point[currentTurn - 1];
    }

    function getPack(nameOfPack, quesIndexStart) {
        quesPackShow.style.visibility = "hidden";
        nameOfPack.style.visibility = "visible";
        choose40.style.visibility = "hidden";
        choose60.style.visibility = "hidden";
        choose80.style.visibility = "hidden";
        updatePoint(mainCan.innerHTML);
        nameOfPack.play();
        setTimeout(infoAppear, 4500);
        quesIndex = quesIndexStart;
        quesLeft = 3;
        quesPointMultiple = 1;
    }

    function wrongAnsWithStar(name) {
        var mainTurn = getMainTurn(name);
        point[mainTurn - 1] -= quesPoint[quesIndex];
        if (point[mainTurn - 1] < 0) point[mainTurn - 1] = 0;
        mainPoint.innerHTML = point[mainTurn - 1];
        topPoint[mainTurn - 1].innerHTML = point[mainTurn - 1];
    }

    function getMainTurn(name) {
        var mainTurn;
        for (i = 0; i < candidate.length; i++) {
            if (candidate[i] == name) {
                mainTurn = i + 1;
                break;
            }
        }
        return mainTurn;
    }

    function timeQuesAppear(ptQues) {
        vid10s.style.visibility = "hidden";
        vid15s.style.visibility = "hidden";
        vid20s.style.visibility = "hidden";
        restartTimeQues();
        if (ptQues == 10) {
            vid10s.style.visibility = "visible";
        }
        else if (ptQues == 20) {
            vid15s.style.visibility = "visible";
        }
        else {
            vid20s.style.visibility = "visible";
        }
    }

    function resetGrantedPane(i) {
        $('#referFi1').html('0');
        $('#referFi2').html('0');
        $('#referFi3').html('0');
        $('#referFi4').html('0');

        $.ajax({
            url: "resetGranted.php",
            type: "POST",
            data: {'allow': i},
            success: function () {
            }
        });
    }

    function currentQues(ques, turn, time, ans) {
        $.ajax({
            url: "uploadCurrentQuestion.php",
            type: "POST",
            data: {'question': ques, 'curCand': turn, 'curTime': time, 'answer': ans},
            success: function () {
            }
        });
    }

    function controlSection(turn) {
        $.ajax({
            url: "controlSection.php",
            type: "POST",
            data: {'curCand': turn},
            success: function () {
            }
        });
    }

    function receivingGrantedSignal() {
        $('#referFi1').load('FN1.php');
        $('#referFi2').load('FN2.php');
        $('#referFi3').load('FN3.php');
        $('#referFi4').load('FN4.php');

        for (var i = 0; i < 4; i++) {
            var test = testGranting(i);
            if (test) {
              pointGranting(i + 1);
            }
        }
    }

    function testGranting(candIndex) {
        for (var i = 0; i < 4; i++) {
            if (i != candIndex && referFi[candIndex].innerHTML == '0') continue;
            else if (referFi[i].innerHTML == '1') return true;
            else {
                return false;
            }
        }
    }

    // functions for handling errors

    function change5pts(turn, pts) {
        point[turn - 1] += pts;
        topPoint[turn - 1].innerHTML = point[turn - 1];
        if (mainCan.innerHTML == candidate[turn - 1]) mainPoint.innerHTML = point[turn - 1];
        else cands[turn - 1].innerHTML = candidate[turn - 1] + "(" + point[turn - 1] + ")";
    }
</script>

</body>
</html>