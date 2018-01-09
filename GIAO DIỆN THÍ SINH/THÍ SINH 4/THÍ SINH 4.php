<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>THÍ SINH 4</title>
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        body {
            background-image: url("BackgroundCandidate.jpg");
            background-size: cover;
        }

        #bigSection {
            position: fixed;
            color: yellow;
            font-size: 60px;
            width: 100%;
            font-family: Arial;
            font-weight: bold;
            text-align: center;
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

        #SectionName, #Time {
            position: fixed;
            font-size: 40px;
            font-family: Arial;
            font-weight: bold;
            color: yellow;
            margin-left: 150px;
        }

        #Time {
            font-size: 60px;
            margin-left: 1000px;
            margin-top: 20px;
        }

        #warmingUpQuestionPane {
            position: fixed;
            background-color: black;
            height: 600px;
            width: 1200px;
            margin-left: 75px;
            margin-top: 100px;
            border: yellow 2px solid;
            color: white;
            font-size: 50px;
            font-family: Arial;
            font-weight: bold;
        }

        #obstacleQuestionPane, #acceQuestionPane, #finishingQuestionPane {
            position: fixed;
            background-color: black;
            height: 250px;
            width: 1200px;
            margin-left: 75px;
            margin-top: 100px;
            border: yellow 2px solid;
            color: white;
            font-size: 40px;
            font-family: Arial;
            font-weight: bold;
        }

        #obstacAns, #acceAns {
            position: fixed;
            margin-top: 370px;
        }

        #obstacAns p, #obstacSent p, #acceAns p, #acceSent p {
            float: left;
            font-size: 25px;
            color: white;
            font-family: Arial;
            font-weight: bold;
        }

        #obstacSent, #acceSent {
            position: fixed;
            margin-top: 450px;
        }

        #obstacleButton, #finishingButton {
            position: fixed;
            font-size: 50px;
            font-weight: bold;
            background-color: red;
            color: white;
            padding: 10px 430px;
            margin-top: 550px;
            margin-left: 85px;
        }

        #finishingQuestionPane {
            height: 500px;
        }

        #finishingButton {
            margin-top: 620px;
            font-size: 30px;
            margin-left: 75px;
            padding: 10px 414px;
        }

        form {
            position: fixed;
            margin-left: 330px;
            margin-top: 300px;
        }

        label {
            font-size: 30px;
            color: yellow;
            font-family: Arial;
            font-weight: bold;
        }

        input {
            font-size: 30px;
            font-weight: bold;
        }

        button {
            position: fixed;
            padding: 10.5px 15px;
            margin-top: 300px;
            margin-left: 920px;
            font-weight: bold;
            color: red;
            background-color: yellow;
        }

        #clock {
            position: fixed;
            margin-left: 1100px;
            margin-top: 20px;
        }

        #status {
            position: fixed;
            margin-top: 700px;
            color: yellow;
            font-family: Arial;
            font-weight: bold;
            font-size: 30px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
<i id="nameOfCan" style="position: fixed; font-family: Arial; font-weight: bold; color: yellow; font-size: 20px"></i>
<div class="Menu">
    <p class="buttonDropdown">=</p>
    <div class="dropdown-content">
        <p onclick="register()">NHẬP TÊN</p>
        <p onclick="warmingUp()">KHỞI ĐỘNG</p>
        <p onclick="obstacle()">VƯỢT CHƯỚNG NGẠI VẬT</p>
        <p onclick="acceleration()">TĂNG TỐC</p>
        <p onclick="finishing()">VỀ ĐÍCH</p>
    </div>
</div>
<p id="bigSection"><i>ĐƯỜNG LÊN ĐỈNH OLYMPIA</i></p>
<p id="allowGranted" style="position: fixed; color: green;">1</p>
<p id="turnWarmingUp" style="position: fixed; display: none"></p>
<p id="status"></p>
<div id="login">
    <form>
        <label>THÍ SINH 4: </label> <input type="text" id="name4">
    </form>
    <button onclick="sendName()">XÁC NHẬN</button>
</div>
<p id="SectionName">PHẦN THI KHỞI ĐỘNG</p>
<p id="Time">60</p>
<img src="clock1.gif" id="clock" height="70px" width="70px">
<section id="warmingUp">
    <p id="warmingUpQuestionPane"></p>
</section>
<p id="control" style="position: fixed;"></p>
<section id="obstacle">
    <p id="obstacleQuestionPane"></p>
    <div id="obstacAns">
        <p>Trả lời: </p>
        <input size="38" style="font-size: 50px; margin-left: 4px; text-align: center" id="ansObs">
    </div>
    <div id="obstacSent">
        <p>Đã gửi: </p>
        <input size="38" disabled style="font-size: 50px; text-align: center" id="sentObs">
    </div>
    <button id="obstacleButton" onclick="grantedObsAns()">TRẢ LỜI CNV</button>
</section>
<section id="acceleration">
    <p id="acceQuestionPane"></p>
    <div id="acceAns">
        <p>Trả lời: </p>
        <input size="38" style="font-size: 50px; margin-left: 4px; text-align: center" id="ansAcce">
    </div>
    <div id="acceSent">
        <p>Đã gửi: </p>
        <input size="38" disabled style="font-size: 50px; text-align: center" id="sentAcce">
    </div>
</section>
<section id="finishing">
    <p id="fiTimeQues" style="position: fixed; display: none"></p>
    <p id="finishingQuestionPane"></p>
    <button id="finishingButton" onclick="finishingGranted()">QUYỀN TRẢ LỜI CÂU HỎI</button>
</section>
</body>
<script>
    var warmingUpTime = 60;
    var obstacleTime = 15;
    var accelerationTime = 30;
    var finishingTime = [10, 15, 20];
    var acceTimeAns = 0;
    var control = 0;
    var obsEventAdded = false;
    var acceEventAdded = false;
    var ansStatus = document.getElementById('status');
    var controlPane = document.getElementById('control');
    var sectionPane = document.getElementById('SectionName');
    var timePane = document.getElementById('Time');
    var obsAns = document.getElementById('ansObs');
    var acceAns = document.getElementById('acceAns');
    var allowed = document.getElementById('allowGranted');
    var warmingUpPane = document.getElementById('warmingUpQuestionPane');
    var obstaclePane = document.getElementById('obstacleQuestionPane');
    var accePane = document.getElementById('acceQuestionPane');
    var finishingPane = document.getElementById('finishingQuestionPane');
    var wuInterval = setInterval(initializedInterval, 1000);
    var obsInterval = setInterval(initializedInterval, 1000);
    var acceInterval = setInterval(initializedInterval, 1000);
    var finishingInterval = setInterval(initializedInterval, 1000);
    var finishingQuestion = setInterval(initializedInterval, 1000);
    var rejectAnswer = setInterval(initializedInterval, 1000);
    var x = setInterval(initializedInterval, 1000);
    var y = setInterval(initializedInterval, 1000);
    var z = setInterval(initializedInterval, 1000);
    var t = setInterval(initializedInterval, 1000);
    var test = 0;

    clearAllInterval();

    function rowAnswer(time) {
        if (!obsEventAdded) {
            obsAns.addEventListener("keydown", function (e) {
                if (e.keyCode === 13) {
                    if (time > 0 && control == 1) {
                        z = $("#ansObs")[0].value;
                        if (z != "") {
                            $("#sentObs")[0].value = z.toUpperCase();
                            sendObsAns();
                            $("#ansObs").val("");
                            ansStatus.innerHTML = "";
                        }
                    } else {
                        $("#ansObs").val("");
                        control = 0;
                        ansStatus.innerHTML = "CÂU TRẢ LỜI KHÔNG ĐƯỢC GỬI!";
                    }
                }
            });
            obsEventAdded = true;
        }
    }

    function acceAnswer(time) {
        if (!acceEventAdded) {
            acceAns.addEventListener("keydown", function (e) {
                if (e.keyCode === 13) {
                    if (time > 0 && control == 1) {
                        z = $("#ansAcce")[0].value;
                        if (z != "") {
                            $("#sentAcce")[0].value = z.toUpperCase();
                            sendAcceAns();
                            $("#ansAcce").val("");
                            ansStatus.innerHTML = "";
                        }
                    } else {
                        $("#ansAcce").val("");
                        control = 0;
                        ansStatus.innerHTML = "CÂU TRẢ LỜI KHÔNG ĐƯỢC GỬI!";
                    }
                }
            });
            acceEventAdded = true;
        }
    }


    $("#SectionName").hide();
    $("#Time").hide();
    $('#warmingUp').hide();
    $('#obstacle').hide();
    $('#acceleration').hide();
    $('#finishing').hide();
    $("#clock").hide();

    function register() {
        onSection("#login");
    }

    function warmingUp() {
        clearAllInterval();
        onSection("#warmingUp");
        setWarmingUp();
        wuInterval = setInterval(warmingUpConnect, 10);
    }

    function obstacle() {
        clearAllInterval();
        onSection("#obstacle");
        setObstacle();
        obsInterval = setInterval(obstacleConnect, 10);
        rejectAnswer = setInterval(obstacleLocks, 10);
    }

    function acceleration() {
        clearAllInterval();
        onSection("#acceleration");
        setAcceleration();
        acceInterval = setInterval(acceConnect, 10);
        rejectAnswer = setInterval(accelerationLocks, 10);
    }

    function finishing() {
        clearAllInterval();
        onSection("#finishing");
        setFinishing();
        finishingInterval = setInterval(finishingConnect, 10);
        finishingQuestion = setInterval(finishingQues, 10);
    }

    function setWarmingUp() {
        clearInterval(x);
        sectionPane.innerHTML = "PHẦN THI KHỞI ĐỘNG";
        timePane.innerHTML = warmingUpTime;
        var time = warmingUpTime;
        x = setInterval(function () {
            if (warmingUpPane.innerHTML != '') {
                clearInterval(x);
                y = setInterval(function () {
                    time--;
                    timePane.innerHTML = time;
                    if (time < 0) {
                        clearInterval(y);
                        clearInterval(wuInterval);
                        timePane.innerHTML = "0";
                    }
                }, 1000);
            }
        }, 10);
    }

    function setObstacle() {
        clearInterval(x);
        sectionPane.innerHTML = "PHẦN THI VƯỢT CHƯỚNG NGẠI VẬT";
        timePane.innerHTML = obstacleTime;
        var time = obstacleTime;
        x = setInterval(function () {
            if (obstaclePane.innerHTML != '' && control == 1) {
                clearInterval(x);
                clearInterval(obsInterval);
                clearInterval(rejectAnswer);
                setTimeout(function () {
                    obsInterval = setInterval(obstacleConnect, 10);
                    rejectAnswer = setInterval(obstacleLocks, 1);
                }, 16000);
                setTimeout(function () {
                    clearInterval(obsInterval);
                }, 19000);
                setTimeout(function () {
                    timePane.innerHTML = obstacleTime;
                }, 20000);
                setTimeout(function () {
                    obsInterval = setInterval(obstacleConnect, 10);
                }, 25000);
                z = setInterval(function () {
                    time--;
                }, 1000);
                y = setInterval(function () {
                    rowAnswer(time);
                    timePane.innerHTML = time;
                    if (time < 0) {
                        clearInterval(z);
                        clearInterval(y);
                        timePane.innerHTML = "0";
                    }
                }, 10);
            }
        }, 10);
    }

    function setAcceleration() {
        clearInterval(x);
        sectionPane.innerHTML = "PHẦN THI TĂNG TỐC";
        timePane.innerHTML = accelerationTime;
        acceTimeAns = 0;
        var time = accelerationTime;
        x = setInterval(function () {
            if (accePane.innerHTML != '' && control == 1) {
                clearInterval(x);
                clearInterval(acceInterval);
                clearInterval(rejectAnswer);
                setTimeout(function () {
                    acceInterval = setInterval(acceConnect, 10);
                    rejectAnswer = setInterval(accelerationLocks, 1);
                }, 31000);
                setTimeout(function () {
                    timePane.innerHTML = accelerationTime;
                }, 35000);
                setTimeout(function () {
                    clearInterval(acceInterval);
                }, 36000);
                setTimeout(function () {
                    acceInterval = setInterval(acceConnect, 10);
                }, 45000);
                z = setInterval(function () {
                    acceTimeAns++;
                }, 10);
                t = setInterval(function () {
                    time--;
                }, 1000);
                y = setInterval(function () {
                    acceAnswer(time);
                    timePane.innerHTML = time;
                    if (time < 0) {
                        clearInterval(z);
                        clearInterval(y);
                        clearInterval(t);
                        timePane.innerHTML = "0";
                    }
                }, 10);
            }
        }, 10);
    }

    function setFinishing() {
        var time = 0;
        clearInterval(x);
        sectionPane.innerHTML = "PHẦN THI VỀ ĐÍCH";
        timePane.innerHTML = 0;
        if (document.getElementById('fiTimeQues').innerHTML == "10") {
            timePane.innerHTML = finishingTime[0];
            time = finishingTime[0];
        }
        if (document.getElementById('fiTimeQues').innerHTML == "20") {
            timePane.innerHTML = finishingTime[1];
            time = finishingTime[1];
        }
        if (document.getElementById('fiTimeQues').innerHTML == "30") {
            timePane.innerHTML = finishingTime[2];
            time = finishingTime[2];
        }
        x = setInterval(function () {
            if (finishingPane.innerHTML != '' && control == 1) {
                clearInterval(x);
                clearInterval(finishingInterval);
                clearInterval(finishingQuestion);
                setTimeout(function () {
                    finishingInterval = setInterval(finishingConnect, 10);
                    finishingQuestion = setInterval(finishingQues, 10);
                }, time * 1000 + 3000);
                z = setInterval(function () {
                    time--;
                }, 1000);
                y = setInterval(function () {
                    timePane.innerHTML = time;
                    if (time < 0) {
                        clearInterval(z);
                        clearInterval(y);
                        timePane.innerHTML = "0";
                    }
                }, 10);
            }
        }, 1);
    }


    function onSection(sectionName) {
        $('#bigSection').hide();
        $('#login').hide();
        $('#warmingUp').hide();
        $('#obstacle').hide();
        $('#acceleration').hide();
        $('#finishing').hide();
        $(sectionName).show();
        if (sectionName != "#login") {
            $("#SectionName").show();
            $("#Time").show();
            $("#clock").show();
        } else {
            $(sectionName).show();
            $("#bigSection").show();
            $("#SectionName").hide();
            $("#Time").hide();
            $("#clock").hide();
        }
    }

    function sendName() {
        var name4 = $('#name4').val();
        document.getElementById("nameOfCan").innerHTML = "THÍ SINH 4: " + name4.toUpperCase();
        $.ajax({
            url: "FILE XÁC NHẬN/XÁC NHẬN TÊN/XÁC NHẬN 4.php",
            type: "POST",
            data: {'name4': name4.toUpperCase()},
            success: function () {
                alert("XÁC NHẬN TÊN THÀNH CÔNG! :)");
            }
        });
    }

    function sendObsAns() {
        var obsAns4 = $('#sentObs').val();
        if (timePane.innerHTML >= 0)
            $.ajax({
                url: "FILE XÁC NHẬN/TRẢ LỜI VCNV/CNV4.php",
                type: "POST",
                data: {'obsAns4': obsAns4.toUpperCase()},
                success: function () {

                }
            });
    }

    function sendAcceAns() {
        var acceAns4 = $('#sentAcce').val();
        if (timePane.innerHTML >= 0)
            $.ajax({
                url: "FILE XÁC NHẬN/TRẢ LỜI TĂNG TỐC/TLTT4.php",
                type: "POST",
                data: {'acceAns4': acceAns4.toUpperCase(), 'time4': acceTimeAns / 100},
                success: function () {

                }
            });
    }

    function grantedObsAns() {
        $.ajax({
            url: "FILE XÁC NHẬN/TRẢ LỜI CNV/TLCNV4.php",
            type: "POST",
            data: {'grantedAns4': 1},
            success: function () {
            }
        });
    }

    function finishingGranted() {
        if (allowed.innerHTML == '1') {
            $.ajax({
                url: "FILE XÁC NHẬN/CƯỚP ĐIỂM VỀ ĐÍCH/FIGranted4.php",
                type: "POST",
                data: {'grantedFinishing4': 1},
                success: function () {
                }
            });
        } else {
            $.ajax({
                url: "FILE XÁC NHẬN/CƯỚP ĐIỂM VỀ ĐÍCH/FIGranted4.php",
                type: "POST",
                data: {'grantedFinishing4': 0},
                success: function () {
                }
            });
        }
    }

    function warmingUpConnect() {
        $('#turnWarmingUp').load('WUTurn.php');
        if (document.getElementById('turnWarmingUp').innerHTML == '4') {
            $('#warmingUpQuestionPane').load('WUConnect.php');
        }
        else {
            warmingUpPane.innerHTML = "";
        }
    }

    function obstacleConnect() {
        $('#control').load('ObsRemote.php');
        $('#obstacleQuestionPane').load('ObsQuestion.php');
        if ($('#control').html() == '0') {
            control = 0;

        }

        else if ($('#control').html() == '1') {
            control = 1;
        }

        else if ($('#control').html() == '2') {
            control = 2;
            setObstacle();
            ansStatus.innerHTML = "";
            $("#sentObs").val("");
            $("#ansObs").val("");
        }
    }

    function acceConnect() {
        $('#control').load('AcceRemote.php');
        $('#acceQuestionPane').load('AcceQuestion.php');
        if (controlPane.innerHTML == '0') {
            control = 0;
        }
        else if (controlPane.innerHTML == '1') {
            control = 1;
        }

        else if (controlPane.innerHTML == '2') {
            control = 2;
            setAcceleration();
            ansStatus.innerHTML = "";
            $("#sentAcce").val("");
            $("#ansAcce").val("");
        }
    }

    function finishingConnect() {
        $('#allowGranted').load('FI4.php');
        $('#control').load('FinishingRemote.php');
        if (controlPane.innerHTML == '0') {
            control = 0;
        }
        else if (controlPane.innerHTML == '1') {
            control = 1;
        }

        else if (controlPane.innerHTML == '2') {
            control = 2;
            setFinishing();
        }
    }

    function finishingQues() {
        $('#finishingQuestionPane').load('FinishingQuestion.php');
        $('#fiTimeQues').load("FinishingTimeQues.php");
    }

    function obstacleLocks() {
        $('#ansObs').val("");
    }

    function accelerationLocks() {
        $('#ansAcce').val("");
    }

    function clearAllInterval() {
        clearInterval(x);
        clearInterval(y);
        clearInterval(z);
        clearInterval(t);
        clearInterval(wuInterval);
        clearInterval(obsInterval);
        clearInterval(acceInterval);
        clearInterval(finishingInterval);
        clearInterval(rejectAnswer);
    }

    function initializedInterval() {

    }
</script>
</html>