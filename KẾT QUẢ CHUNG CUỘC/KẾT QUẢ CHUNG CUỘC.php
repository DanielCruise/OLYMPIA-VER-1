<!DOCTYPE html>
<html>
<head>
    <title>KẾT QUẢ CHUNG CUỘC</title>
    <meta charset="utf-8"/>
    <script src="jquery-3.2.1.min.js"></script>
    <style>
        body {
            background-image: url("FinalResult.png");
            background-size: cover;
            color: white;
            font-family: Arial;
            font-weight: bold;
        }

        .name {
            position: fixed;
            height: 63px;
            width: 265px;
            font-size: 30px;
            margin-left: 22px;
            margin-top: 237px;
            justify-content: center;
            align-items: center;
            display: flex;
            text-align: center;
            cursor: pointer;
        }

        #name2 {
            margin-left: 372px;
            cursor: pointer;
        }

        #name3 {
            margin-left: 727px;
            cursor: pointer;
        }

        #name4 {
            margin-left: 1080px;
            cursor: pointer;
        }

        .point {
            position: fixed;
            height: 210px;
            width: 230px;
            font-size: 120px;
            margin-left: 39px;
            margin-top: 315px;
            justify-content: center;
            align-items: center;
            display: flex;
            text-align: center;
        }

        #pt2 {
            margin-left: 390px;
        }

        #pt3 {
            margin-left: 743px;
        }

        #pt4 {
            margin-left: 1097px;
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


    </style>
</head>
<body>
<p class="name" id="name1" onclick="cand1Extra()"></p>
<p class="name" id="name2" onclick="cand2Extra()"></p>
<p class="name" id="name3" onclick="cand3Extra()"></p>
<p class="name" id="name4" onclick="cand4Extra()"></p>
<p class="point" id="pt1" onclick="first()"></p>
<p class="point" id="pt2" onclick="second()"></p>
<p class="point" id="pt3" onclick="third()"></p>
<p class="point" id="pt4" onclick="fourth()"></p>
<audio autoplay src="FinishFinish.mp3"></audio>
<audio src="TK1.wav" id="congratz1"></audio>
<audio src="TK2.wav" id="congratz2"></audio>
<audio src="TK3.wav" id="congratz3"></audio>
<audio src="TK4.mp3" id="congratz4"></audio>
<audio src="award.wav" id="award"></audio>
<div class="Menu">
    <p class="dropdown">=</p>
    <div class="dropdown-content">
        <p><a href="/OLYMPIA/CÂU HỎI PHỤ/CÂU HỎI PHỤ.php" style="text-decoration: none; color: white">CÂU HỎI PHỤ</a></p>
    </div>
</div>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'danielcruise';
$dbName = 'candidate';
$i = 0;

// create connection
$nameAndPointArray = array();
$nameArray = array("", "", "", "");
$pointArray = array(0, 0, 0, 0);
arsort($nameAndPointArray);
$conn = new mysqli($servername, $username, $password, $dbName);

// get candidates' name and points from database
for ($i = 1; $i < 5; $i++) {
    $sql = "SELECT * FROM candidate where candInd = '$i'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $nameArray[$i - 1] = $row["nameCan"];
    $pointArray[$i - 1] = (int)$row["point"];

}

$conn->close();
?>
</body>
<script>
    var candidate = <?php echo json_encode($nameArray)?>;
    var point = <?php echo json_encode($pointArray)?>;
    var nameCand = document.getElementsByClassName('name');
    var pt = document.getElementsByClassName('point');
    var k = 0;
    for (i = 0; i < 4; i++) {
        nameCand[i].innerHTML = candidate[i];
        pt[i].innerHTML = point[i];
    }


    function cand1Extra() {
        $.ajax({
            url: "CHP1.php",
            type: "POST",
            data: {'extraRegister1': 1},
            success: function () {
            }
        });
    }

    function cand2Extra() {
        $.ajax({
            url: "CHP2.php",
            type: "POST",
            data: {'extraRegister2': 1},
            success: function () {
            }
        });
    }

    function cand3Extra() {
        $.ajax({
            url: "CHP3.php",
            type: "POST",
            data: {'extraRegister3': 1},
            success: function () {
            }
        });
    }

    function cand4Extra() {
        $.ajax({
            url: "CHP4.php",
            type: "POST",
            data: {'extraRegister4': 1},
            success: function () {
            }
        });
    }


    function first() {
        document.getElementById('congratz1').play();
    }

    function second() {
        document.getElementById('congratz2').play();
    }

    function third() {
        document.getElementById('congratz3').play();
    }

    function fourth() {
        if (k == 0) {
            document.getElementById('congratz4').play();
            k = 1;
        }
        else {
            document.getElementById('award').play();
            k = 0;
        }
    }


</script>
</html>