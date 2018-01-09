<!DOCTYPE html>
<html>
<head>
    <title>TĂNG TỐC</title>
    <meta charset="utf-8"/>
    <style>
        body {
            background-image: url("Background.png");
            background-size: cover;
        }

        #TimeAccele, #QuesAcceleShow, #AcceleVideo, #showAns {
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

        #AcceleVideo {
            /*  making the video fullscreen  */
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 2000;
        }

        #SectionName {
            position: fixed;
            display: block;
            font-family: Cambria;
            color: white;
            font-size: 100px;
            font-weight: bold;
            margin-top: 13%;
            width: 100%;
            height: auto;
            text-align: center;
            cursor: pointer;
        }

        #ques {
            position: fixed;
            font-weight: bold;
            font-family: Arial;
            font-size: 25px;
            color: white;
            margin-left: 350px;
            margin-top: -75px;
            justify-content: center;
            display: flex;
            align-items: center;
            height: 50px;
            width: 900px;
            text-align: center;
            z-index: 100;
            cursor: pointer;

        }

        #QuestionArea {
            position: relative;
            margin-top: 120px;
            margin-left: 360px;
            height: 590px;
            width: 890px;
        }

        #QuesImg {
            position: absolute;
            height: 590px;
            width: 890px;
        }

        .candi {
            position: fixed;
            display: flex;
            font-family: Arial;
            height: 100px;
            width: 1200px;
            margin-left: 30px;
            margin-top: 70px;
            z-index: 1000;
        }

        .candi p {
            margin-left: 100px;
            background-color: black;
            border: 2px solid white;
            color: white;
            font-weight: bold;
            font-size: 20px;
            justify-content: center;
            display: flex;
            align-items: center;
            width: 200px;
            height: 50px;
        }

        .score {
            position: fixed;
            display: flex;
            margin-top: 80px;
            margin-left: 30px;
            height: 100px;
            width: 1200px;
            font-family: Arial;
            z-index: 1000;
            cursor: pointer;
        }

        .score p {
            background-color: black;
            border: 2px solid white;
            color: white;
            justify-content: center;
            display: flex;
            align-items: center;
            margin-left: 100px;
            width: 200px;
            height: 150px;
            font-size: 80px;
            font-weight: bold;
            cursor: pointer;
        }

        #minorSection {
            position: fixed;
            font-family: Cambria;
            font-weight: bold;
            font-size: 150px;
            color: white;
            text-align: center;
            width: 100%;
            margin-top: 450px;
        }

        .addPts1, .addPts2, .addPts3, .addPts4 {
            display: flex;
            align-items: center;
            position: fixed;
            text-align: center;
            background-color: black;
            color: white;
            font-family: Arial;
            font-weight: bold;
            margin-top: 70px;
            margin-left: 130px;
            width: 200px;
            height: 20px;
            z-index: 1100;
            cursor: pointer;
        }

        .addPts2 {
            margin-left: 430px;
        }

        .addPts3 {
            margin-left: 730px;
        }

        .addPts4 {
            margin-left: 1030px;
        }

        .addPts1 p, .addPts2 p, .addPts3 p, .addPts4 p {
            width: 50px;
            border: 1px white solid;
        }

        .Menu {
            margin-top: -120px;
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
            z-index: 1000;
            box-shadow: black 3px 3px;
            background-color: gray;
            cursor: pointer;
        }

        .Menu:hover .dropdown-content {
            display: block;
            z-index: 1100;
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
            z-index: 1100;
            color: white;
            font-size: 15px;
            background-color: black;
        }

        #topCand {
            margin-top: -120px;
            margin-left: -50px;
            justify-content: center;
            display: flex;
            align-items: center;
            text-align: center;
            position: fixed;
            font-family: Arial;
            color: white;
            font-weight: bold;
            width: 1300px;
            z-index: -1000;
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
            margin-top: -140px;
            margin-left: -50px;
            justify-content: center;
            text-align: center;
            display: flex;
            align-items: center;
            position: fixed;
            font-family: Arial;
            color: white;
            font-weight: bold;
            width: 1300px;
            z-index: -1000;

        }

        #topPoint p {
            width: 250px;
            margin-left: 100px;
            background-color: black;
            border: 2px solid white;
            font-size: 100px;
        }

        #answerPane, #tempAnswerPane {
            position: fixed;
            font-size: 23px;
            left: 650px;
            line-height: 1.1;
            text-shadow: 2px 2px black;
        }

        .nameCand, .tempNameCand {
            font-family: Arial;
            font-weight: bolder;
            color: yellow;
        }

        .ansCand, .tempAnsCand {
            font-family: Arial;
            color: white;
            font-weight: bold;
            font-size: 30px;
        }

        #infoAns1, #tempInfoAns1 {
            position: fixed;
            top: 55px;
        }

        #infoAns2, #tempInfoAns2 {
            position: fixed;
            top: 220px;
        }

        #infoAns3, #tempInfoAns3 {
            position: fixed;
            top: 365px;
        }

        #infoAns4, #tempInfoAns4 {
            position: fixed;
            top: 530px;
        }

        #timePane, #tempTimePane {
            position: fixed;
            font-family: "Arial Narrow";
            font-size: 50px;
            color: white;
            font-weight: bold;
            left: 460px;
        }

        #time1, #tempTime1 {
            position: fixed;
            top: 40px;
        }

        #time2, #tempTime2 {
            position: fixed;
            top: 203px;
        }

        #time3, #tempTime3 {
            position: fixed;
            top: 348px;
        }

        #time4, #tempTime4 {
            position: fixed;
            top: 508px;
        }
    </style>
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<p id="SectionName">TĂNG TỐC</p>
<section id="answerPane">
    <div id="infoAns1">
        <p class="nameCand" id="name1"></p>
        <p class="ansCand" id="ans1"></p>
    </div>
    <div id="infoAns2">
        <p class="nameCand" id="name2"></p>
        <p class="ansCand" id="ans2"></p>
    </div>
    <div id="infoAns3">
        <p class="nameCand" id="name3"></p>
        <p class="ansCand" id="ans3"></p>
    </div>
    <div id="infoAns4">
        <p class="nameCand" id="name4"></p>
        <p class="ansCand" id="ans4"></p>
    </div>
    <div id="timePane">
        <p id="time1">0.00</p>
        <p id="time2">0.00</p>
        <p id="time3">0.00</p>
        <p id="time4">0.00</p>
    </div>
</section>

<section id="tempAnswerPane" style="display: none">
    <div id="tempInfoAns1">
        <p class="tempNameCand" id="tempName1"></p>
        <p class="tempAnsCand" id="tempAns1"></p>
    </div>
    <div id="tempInfoAns2">
        <p class="tempNameCand" id="tempName2"></p>
        <p class="tempAnsCand" id="tempAns2"></p>
    </div>
    <div id="tempInfoAns3">
        <p class="tempNameCand" id="tempName3"></p>
        <p class="tempAnsCand" id="tempAns3"></p>
    </div>
    <div id="tempInfoAns4">
        <p class="tempNameCand" id="tempName4"></p>
        <p class="tempAnsCand" id="tempAns4"></p>
    </div>
    <div id="tempTimePane">
        <p id="tempTime1">0.00</p>
        <p id="tempTime2">0.00</p>
        <p id="tempTime3">0.00</p>
        <p id="tempTime4">0.00</p>
    </div>
</section>

<section id="pointTop">
    <div id="topCand">
        <p class="minorCand"></p>
        <p class="minorCand"></p>
        <p class="minorCand"></p>
        <p class="minorCand"></p>
    </div>
    <div id="topPoint">
        <p class="minorPoint"></p>
        <p class="minorPoint"></p>
        <p class="minorPoint"></p>
        <p class="minorPoint"></p>
    </div>
</section>
<section id="pointCan">
    <p id="minorSection"><i>TĂNG TỐC</i></p>
    <div class="candi">
        <p class="minorCan"></p>
        <p class="minorCan"></p>
        <p class="minorCan"></p>
        <p class="minorCan"></p>
    </div>
    <div class="score">
        <p onclick="changePts(1, -10)" class="minorScore"></p>
        <p onclick="changePts(2, -10)" class="minorScore"></p>
        <p onclick="changePts(3, -10)" class="minorScore"></p>
        <p onclick="changePts(4, -10)" class="minorScore"></p>
    </div>
    <div class="addPts1">
        <p onclick="changePts(1, 40)">40</p>
        <p onclick="changePts(1, 30)">30</p>
        <p onclick="changePts(1, 20)">20</p>
        <p onclick="changePts(1, 10)">10</p>
    </div>
    <div class="addPts2">
        <p onclick="changePts(2, 40)">40</p>
        <p onclick="changePts(2, 30)">30</p>
        <p onclick="changePts(2, 20)">20</p>
        <p onclick="changePts(2, 10)">10</p>
    </div>
    <div class="addPts3">
        <p onclick="changePts(3, 40)">40</p>
        <p onclick="changePts(3, 30)">30</p>
        <p onclick="changePts(3, 20)">20</p>
        <p onclick="changePts(3, 10)">10</p>
    </div>
    <div class="addPts4">
        <p onclick="changePts(4, 40)">40</p>
        <p onclick="changePts(4, 30)">30</p>
        <p onclick="changePts(4, 20)">20</p>
        <p onclick="changePts(2, 10)">10</p>
    </div>
</section>
<div class="Menu">
    <p class="buttonDropdown">=</p>
    <div class="dropdown-content">
        <p onclick="showAllAns()">CÂU TRẢ LỜI THÍ SINH</p>
        <p onclick="nextQues()">CÂU HỎI TIẾP THEO</p>
        <p onclick="returnQues()">QUAY VỀ CÂU HỎI HIỆN TẠI</p>
        <p onclick="updatePoint()">CẬP NHẬT ĐIỂM</p>
        <p onclick="showPt()">ĐIỂM THÍ SINH</p>
        <p><a href="/OLYMPIA/TỔNG KẾT ĐIỂM/TỔNG KẾT ĐIỂM.php" style="text-decoration: none; color: white">TỔNG KẾT ĐIỂM</a></p>
    </div>
</div>
<div id="questionSection">
    <p id="ques" style="visibility: hidden;" onclick="timeStart()"></p>
    <div id="QuestionArea">
        <img id="QuesImg" src="" style="visibility: hidden;">
    </div>
    <audio id="AcceRightAns">
        <source src="AccelerationRightAnswer.mp3">
    </audio>
    <audio id="AcceleStartAudio">
        <source src="AccelerationStart.mp3" type="audio/mp3">
    </audio>

    <video id="QuesAcceleShow" style="visibility: hidden">
        <source src="quesAcceleShow.mp4" type="video/mp4">
    </video>
    <video id="AcceleVideo" autoplay>
        <source src="AcceleVideo.mp4" type="video/mp4">
    </video>
    <video id="TimeAccele" style="visibility: hidden;">
        <source src="timeAccele.mp4" type="video/mp4">
    </video>
</div>
<video id="showAns" style="visibility: hidden;">
    <source src="AcceAnsShowingVideo.mp4" type="video/mp4">
</video>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';

$i = 0;
$nameArray = array("", "", "", "");
$quesArray = array("", "", "", "");
$ansArray = array("", "", "", "");
$ques1 = array("", "", "", "", "", "", "", "");
$ques2 = "";
$ques3 = array("", "", "");
$ques4 = "";
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
$quesInd = 0;
for ($quesInd = 1; $quesInd < 14; $quesInd++) {
    $sql = "SELECT * FROM acceleration where imgInd = '$quesInd'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["questionNum"] == '1') {
        $quesArray[0] = $row["question"];
        $ansArray[0] = $row["answer"];
    }
    if ($row["questionNum"] == '2') {
        $quesArray[1] = $row["question"];
        $ansArray[1] = $row["answer"];
    }
    if ($row["questionNum"] == '3') {
        $quesArray[2] = $row["question"];
        $ansArray[2] = $row["answer"];
    }
    if ($row["questionNum"] == '4') {
        $quesArray[3] = $row["question"];
        $ansArray[3] = $row["answer"];
    }
}

$i = 0;
for ($quesInd = 1; $quesInd < 14; $quesInd++) {
    $sql = "SELECT * FROM acceleration where imgInd = '$quesInd'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["questionNum"] == '1') $ques1[$i] = $row["imageLink"];
    if ($row["questionNum"] == '2') $ques2 = $row["imageLink"];
    if ($row["questionNum"] == '3') $ques3[$i] = $row["imageLink"];
    if ($row["questionNum"] == '4') $ques4 = $row["imageLink"];
    $i++;
    if ($row["questionNum"] == '1' && $i == 8) $i = -1;
}



$conn->close();
?>

<script type="text/javascript">
    var quesNum = 0;
    var candidate = <?php echo json_encode($nameArray); ?>;
    var point = <?php echo json_encode($point); ?>;
    var quesAcceleShow = document.getElementById('QuesAcceleShow');
    var timeAccele = document.getElementById('TimeAccele');
    var mainName = document.getElementsByClassName('minorCan');
    var topName = document.getElementsByClassName('minorCand');
    var topPoint = document.getElementsByClassName('minorPoint');
    var scorePane = document.getElementsByClassName('minorScore');
    var rightAnsAudio = document.getElementById('AcceRightAns');
    var showAnsVideo = document.getElementById("showAns");
    var candShowAns = document.getElementsByClassName('nameCand');
    var titleQues = <?php echo json_encode($quesArray); ?>;
    var titleAns = <?php echo json_encode($ansArray); ?>;
    var imgAccele1 = <?php echo json_encode($ques1); ?>;
    var imgAccele2 = <?php echo json_encode($ques2); ?>;
    var imgAccele3 = <?php echo json_encode($ques3); ?>;
    var imgAccele4 = <?php echo json_encode($ques4); ?>;
    var quesImg = document.getElementById('QuesImg');
    var questionPane = document.getElementById('ques');

    currentQues('','', 0); // refreshing
    resetAns();

    setTimeout(goOnAccele, 5000);
    initialize();
    for (i = 0; i < 4; i++) {
        mainName[i].innerHTML = candidate[i];
        scorePane[i].innerHTML = point[i];
        topName[i].innerHTML = candidate[i];
        topPoint[i].innerHTML = point[i];
        candShowAns[i].innerHTML = candidate[i];
    }


    function showQues() {
        questionPane.style.visibility = 'visible';

        if (quesNum == 1) {
            questionPane.innerHTML = titleQues[0];
            currentQues(titleQues[0], titleAns[0], 0);
        }

        if (quesNum == 2) {
            questionPane.innerHTML = titleQues[1];
            currentQues(titleQues[1], titleAns[1], 0);
            quesImg.src = imgAccele2;
            quesImg.style.visibility = 'visible';
        }

        if (quesNum == 3) {
            questionPane.innerHTML = titleQues[2];
            currentQues(titleQues[2], titleAns[2], 0);
        }

        if (quesNum == 4) {
            questionPane.innerHTML = titleQues[3];
            currentQues(titleQues[3], titleAns[3], 0);
            quesImg.src = imgAccele4;
            quesImg.style.visibility = 'visible';
        }

    }

    function timeStart() {
        quesAcceleShow.style.visibility = 'hidden';
        timeAccele.style.visibility = 'visible';
        timeAccele.play();
        setTimeout(function () {
            controlSection(0);
        }, 31000);
        controlSection(1);
        quesImg.style.visibility = 'visible';

        if (quesNum == 1) {
            setTimeout(function () {
                quesImg.src = imgAccele1[0];
            }, 800);
            setTimeout(function () {
                quesImg.src = imgAccele1[1];
            }, 4550);
            setTimeout(function () {
                quesImg.src = imgAccele1[2];
            }, 8400);
            setTimeout(function () {
                quesImg.src = imgAccele1[3];
            }, 12050);
            setTimeout(function () {
                quesImg.src = imgAccele1[4];
            }, 15800);
            setTimeout(function () {
                quesImg.src = imgAccele1[5];
            }, 19550);
            setTimeout(function () {
                quesImg.src = imgAccele1[6];
            }, 23300);
            setTimeout(function () {
                quesImg.src = imgAccele1[7];
            }, 27050);
        }

        if (quesNum == 3) {
            setTimeout(function () {
                quesImg.src = imgAccele3[0];
            }, 800);
            setTimeout(function () {
                quesImg.src = imgAccele3[1];
            }, 10800);
            setTimeout(function () {
                quesImg.src = imgAccele3[2];
            }, 20800);
        }
    }


    function nextQues() {
        hideInfo();
        resetShowAns();
        resetAns();
        currentQues("", "", 2);
        $("#pointTop").hide();
        quesNum++;
        quesAcceleShow.style.visibility = "visible";
        quesAcceleShow.play();
        setTimeout(showQues, 3200);
        $(document).ready(function () {
            $("#pointCan").hide();
        });
        showAnsVideo.style.visibility = "hidden";
        showAnsVideo.currentTime = 0;
        setDefaultBackground();
    }

    function returnQues() {
        timeAccele.style.visibility = 'visible';
        questionPane.style.visibility = 'visible';
        resetShowAns();
        $("#pointTop").hide();
        quesAcceleShow.style.visibility = "visible";
        showQues();
        $(document).ready(function () {
            $("#pointCan").hide();
        });
        showAnsVideo.style.visibility = "hidden";
        quesImg.style.visibility = "visible";

        setDefaultBackground();
    }

    function goOnAccele() {
        document.getElementById('AcceleVideo').style.display = 'none';
        AcceleStartAudio = document.getElementById('AcceleStartAudio');
        AcceleStartAudio.play();
    }

    function hideInfo() {
        document.getElementById('SectionName').style.visibility = "hidden";
        timeAccele.style.visibility = 'hidden';
        quesImg.src = "";
        quesAcceleShow.currentTime = 0;
        timeAccele.currentTime = 0;
        questionPane.style.visibility = 'hidden';
        quesImg.style.visibility = 'hidden';
    }

    function showPt() {
        hideInfo();
        quesAcceleShow.style.visibility = 'hidden';
        resetShowAns();
        $(document).ready(function () {
            $("#pointCan").show();
        });
        changeBackgroundImage();
    }

    function initialize() {
        $(document).ready(function () {
            $("#pointCan").hide();
            $("#infoAns1").hide();
            $("#infoAns2").hide();
            $("#infoAns3").hide();
            $("#infoAns4").hide();
            $("#time1").hide();
            $("#time2").hide();
            $("#time3").hide();
            $("#time4").hide();
        });
    }

    // functions for adding points
    function changePts(candidate, pt) {
        point[candidate - 1] += pt;
        scorePane[candidate - 1].innerHTML = point[candidate - 1];
        rightAnsAudio.play();
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

    function showAllAns() {
        hideInfo();
        sort();
        $('#pointCan').hide();
        quesAcceleShow.style.visibility = 'hidden';
        quesAcceleShow.style.visibility = 'hidden';
        showAnsVideo.style.visibility = 'visible';
        showAnsVideo.play();
        setTimeout(function () {
            $("#infoAns1").show();
            $("#time1").show();
        }, 3700);
        setTimeout(function () {
            $("#infoAns2").show();
            $("#time2").show();
        }, 6900);
        setTimeout(function () {
            $("#infoAns3").show();
            $("#time3").show();
        }, 9000);
        setTimeout(function () {
            $("#infoAns4").show();
            $("#time4").show();
        }, 11000);
        setDefaultBackground();
    }

    function resetShowAns() {
        showAnsVideo.style.visibility = "hidden";
        showAnsVideo.currentTime = 0;
        $("#infoAns1").hide();
        $("#infoAns2").hide();
        $("#infoAns3").hide();
        $("#infoAns4").hide();
        $("#time1").hide();
        $("#time2").hide();
        $("#time3").hide();
        $("#time4").hide();

    }

    function changeBackgroundImage() {
        $('body').css("background-image", "url(PointBkgr.png)");
    }

    function setDefaultBackground() {
        $('body').css("background-image", "url(Background.png)");
    }

    function currentQues(ques, ans,  turn) {
        $.ajax({
            url: "uploadCurrentQuestion.php",
            type: "POST",
            data: {'question': ques, 'curCand': turn, 'answer': ans},
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



    function sort() {
        $('#tempAns1').load('ans1.php');
        $('#tempAns2').load('ans2.php');
        $('#tempAns3').load('ans3.php');
        $('#tempAns4').load('ans4.php');
        $('#tempTime1').load('time1.php');
        $('#tempTime2').load('time2.php');
        $('#tempTime3').load('time3.php');
        $('#tempTime4').load('time4.php');
        var ans1 = {timeAns: $('#tempTime1').html(), nameCand: candidate[0], ans: $('#tempAns1').html()};
        var ans2 = {timeAns: $('#tempTime2').html(), nameCand: candidate[1], ans: $('#tempAns2').html()};
        var ans3 = {timeAns: $('#tempTime3').html(), nameCand: candidate[2], ans: $('#tempAns3').html()};
        var ans4 = {timeAns: $('#tempTime4').html(), nameCand: candidate[3], ans: $('#tempAns4').html()};

        var ansArray = [ans1, ans2, ans3, ans4];
        var i, j;
        var temp;
        for (i = 0; i < 4; i++) {
            for (j = i + 1; j < 4; j++) {
                if (parseFloat(ansArray[i].timeAns) > parseFloat(ansArray[j].timeAns)) {
                    temp = ansArray[i];
                    ansArray[i] = ansArray[j];
                    ansArray[j] = temp;
                }
            }
        }

        $('#name1').html(ansArray[0].nameCand);
        $('#name2').html(ansArray[1].nameCand);
        $('#name3').html(ansArray[2].nameCand);
        $('#name4').html(ansArray[3].nameCand);
        $('#ans1').html(ansArray[0].ans);
        $('#ans2').html(ansArray[1].ans);
        $('#ans3').html(ansArray[2].ans);
        $('#ans4').html(ansArray[3].ans);
        $('#time1').html(parseFloat(ansArray[0].timeAns).toFixed(2));
        $('#time2').html(parseFloat(ansArray[1].timeAns).toFixed(2));
        $('#time3').html(parseFloat(ansArray[2].timeAns).toFixed(2));
        $('#time4').html(parseFloat(ansArray[3].timeAns).toFixed(2));
    }

    function resetAns() {
        $.ajax({
            url: "resetAns.php",
            type: "POST",
            data: {'curCand': 1},
            success: function () {
            }
        });
        $('#name1').html(candidate[0]);
        $('#name2').html(candidate[1]);
        $('#name3').html(candidate[2]);
        $('#name4').html(candidate[3]);
    }

</script>
</body>
</html>
