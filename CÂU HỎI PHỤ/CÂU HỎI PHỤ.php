<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CÂU HỎI PHỤ</title>
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        #timeVid, #quesShowVid {
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

        #quesShowVid {
            z-index: -200;
        }

        #sectionName {
            position: fixed;
            font-size: 100px;
            font-family: Cambria;
            font-weight: bold;
            width: 100%;
            color: white;
            text-align: center;
            text-decoration: underline;
            margin-top: 50px;
        }

        #QuestionPane {
            position: fixed;
            margin-left: 90px;
            margin-top: 540px;
            font-weight: bold;
            color: white;
            font-size: 25px;
            width: 916px;
            height: 156px;
            text-align: left;
            padding: 7px 7px;
            text-shadow: 2px 2px black;
            font-family: Arial;
        }

        .Menu {
            position: relative;
            color: white;
            font-family: Arial;
            font-weight: bold;
            display: inline-block;
            float: right;
            text-align: right;
            z-index: 50;
        }

        .dropdown-content {
            margin-top: -10px;
            display: none;
            position: absolute;
            width: 250px;
            margin-left: -240px;
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

        #nameCan {
            position: fixed;
            font-size: 20px;
            font-weight: bold;
            font-family: Arial;
            margin-left: 1000px;
            margin-top: 200px;
        }

        .name {
            margin-top: 20px;
            background-color: yellow;
            height: 50px;
            width: 300px;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<i id="sectionName">CÂU HỎI PHỤ</i>
<video id="timeVid" onclick="startOrContinue()">
    <source src="TimeVid.mp4" type="video/mp4">
</video>
<video id="quesShowVid">
    <source src="QuesShow.mp4" type="video/mp4">
</video>
<audio id="grantedAudio">
    <source src="ExtraGetScore.mp3" type="audio/mp3">
</audio>
<div class="Menu">
    <p class="dropdown">=</p>
    <div class="dropdown-content">
        <p onclick="onQues(0)">CÂU HỎI PHỤ SỐ 1</p>
        <p onclick="onQues(1)">CÂU HỎI PHỤ SỐ 2</p>
        <p onclick="onQues(2)">CÂU HỎI PHỤ SỐ 3</p>
    </div>
</div>
<p id="QuestionPane"></p>
<div id="nameCan">
    <p class="name" id="name1" onclick="wrong(1)"></p>
    <p class="name" id="name2" onclick="wrong(2)"></p>
    <p class="name" id="name3" onclick="wrong(3)"></p>
    <p class="name" id="name4" onclick="wrong(4)"></p>
</div>
<div id="registered" style="position: fixed; display: none">
    <p class="extraRegis" id="registered1"></p>
    <p class="extraRegis" id="registered2"></p>
    <p class="extraRegis" id="registered3"></p>
    <p class="extraRegis" id="registered4"></p>
</div>

<div id="granted" style="position: fixed; display: none">
    <p class="granted" id="granted1"></p>
    <p class="granted" id="granted2"></p>
    <p class="granted" id="granted3"></p>
    <p class="granted" id="granted4"></p>
</div>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';

$quesArray = array("", "", "");
$ansArray = array("", "", "");
$nameArray = array("", "", "", "");

// create connection
$conn = new mysqli($servername, $username, $password, 'candidate');
$sql = "SELECT * FROM candidate WHERE candInd = '1'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$codeDb = $row["code"];

for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM candidate WHERE candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $nameArray[$i - 1] = $row["nameCan"];
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $codeDb);
$i = 0;
for ($i = 1; $i < 4; $i++) {
    $sql = "SELECT * FROM extraques WHERE candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    if ($row["candInd"] == '1') {
        $quesArray[0] = $row["ques"];
        $ansArray[0] = $row["ans"];
    }
    if ($row["candInd"] == '2') {
        $quesArray[1] = $row["ques"];
        $ansArray[1] = $row["ans"];
    }
    if ($row["candInd"] == '3') {
        $quesArray[2] = $row["ques"];
        $ansArray[2] = $row["ans"];
    }
}
$conn->close();
?>
<script type="text/javascript">
    var showQues = document.getElementById('quesShowVid');
    var quesPane = document.getElementById('QuestionPane');
    var timeVid = document.getElementById('timeVid');
    var extraQues = <?php echo json_encode($quesArray); ?>;
    var extraAns = <?php echo json_encode($ansArray); ?>;
    var candidate = <?php echo json_encode($nameArray); ?>;
    var candPane = document.getElementsByClassName('name');
    var grantedPane = document.getElementsByClassName('granted');
    var extraRegis = document.getElementsByClassName('extraRegis');
    var granted = true;
    var receive = setInterval(function () {

    }, 1000);
    reset();
    clearInterval(receive);
    resetGrantedPane();
    currentQues("", "");

    $('#registered1').load("registered1.php");
    $('#registered2').load("registered2.php");
    $('#registered3').load("registered3.php");
    $('#registered4').load("registered4.php");
    for (i = 0; i < 4; i++) {
        candPane[i].innerHTML = candidate[i];
    }


    function onQues(i) {
        reset();
        quesPane.innerHTML = extraQues[i];
        showQues.play();
        setTimeout(function () {
            $('#timeVid').show();
            $('#QuestionPane').show();
            $('#name1').show();
            $('#name2').show();
            $('#name3').show();
            $('#name4').show();
            currentQues(extraQues[i], extraAns[i]);
        }, 3000);
        $.ajax({
            url: "AllowGranted.php",
            type: "POST",
            data: {'x': 0},
            success: function () {
            }
        });
    }

    function reset() {
        testRegistered();
        $.ajax({
            url: "AllowGranted.php",
            type: "POST",
            data: {'x': 0},
            success: function () {
            }
        });
        $('#timeVid').hide();
        $('#QuestionPane').hide();
        $('#name1').hide();
        $('#name2').hide();
        $('#name3').hide();
        $('#name4').hide();
    }

    function testRegistered() {
        for (var i = 0; i < 4; i++) {
            if (extraRegis[i].innerHTML == '1') candPane[i].style.backgroundColor = "yellow";
            else candPane[i].style.backgroundColor = "black";
        }
    }

    function wrong(i) {
        clearInterval(receive);
        candPane[i - 1].style.backgroundColor = "gray";
        timeVid.play();
        resetGrantedPane();
        startOrContinue();
        granted = false;
    }

    function pointGranting(turn) {
        if (!granted) {
            candPane[turn - 1].style.backgroundColor = "green";
            document.getElementById('grantedAudio').play();
            timeVid.pause();
            granted = true;
        }
    }

    function currentQues(ques, ans) {
        $.ajax({
            url: "uploadCurrentQuestion.php",
            type: "POST",
            data: {'question': ques, 'answer': ans},
            success: function () {
            }
        });
    }

    function startOrContinue() {
        timeVid.play();
        receive = setInterval(receivingGrantedSignal, 100);

        $.ajax({
            url: "AllowGranted.php",
            type: "POST",
            data: {'x': 1},
            success: function () {
            }
        });

        resetGrantedPane();
        granted = false;
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
        $('#granted1').load('Granted1.php');
        $('#granted2').load('Granted2.php');
        $('#granted3').load('Granted3.php');
        $('#granted4').load('Granted4.php');

        for (var i = 0; i < 4; i++) {
            var test = testGranting(i);
            if (test) {
                pointGranting(i + 1);
            }
        }
    }

    function testGranting(candIndex) {
        for (var i = 0; i < 4; i++) {
            if (i != candIndex && grantedPane[candIndex].innerHTML == '0') continue;
            else if (grantedPane[i].innerHTML == '1') return true;
            else {
                return false;
            }
        }
    }

    function resetGrantedPane() {
        $('#granted1').html("0");
        $('#granted2').html("0");
        $('#granted3').html("0");
        $('#granted4').html("0");
        $.ajax({
            url: "resetGranted.php",
            type: "POST",
            data: {'allow': 0},
            success: function () {
            }
        });
    }

</script>
</body>
</html>